<?php

namespace App\Http\Controllers\Ceo\Guest\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\Auth\RegisterRequest;
use App\Mail\RegisterOtpMail;
use App\Models\Admin;
use App\Models\Ceo\Domain;
use App\Models\Ceo\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('Guest.auth.register');
    }

    public function registerStore(RegisterRequest $request){

        DB::beginTransaction();
        // try {
            $databaseNameLowercase = strtolower($request->domain);
            $databaseProducationNameLowercase = Str::replace(' ', '_', $databaseNameLowercase);
    
            // 1 = create database after make tenant
            $this->storeTenant($request,$databaseProducationNameLowercase);
            //reconect to database
            $this->reconnect($request,$databaseProducationNameLowercase);

     
            DB::commit();

            // 4 = return response
            return response()->json([
                'message' => 'تم إرسال كود التفعيل الي البريد الالكتروني بنجاح',
                'statusCode' => 200,
            ]);
    }






    protected function storeTenant($request,$databaseProducationNameLowercase) {
       
        $randomOtp = rand(9,786873);
        
        $currentDate = Carbon::now();
        $newDate = $currentDate->addMonth();

        $request->merge([
            'domain'=>$databaseProducationNameLowercase,
            'database_name' => $databaseProducationNameLowercase,
            'otp'=>$randomOtp,
            'start_subscription'=>$currentDate,
            'end_subscription'=>$newDate,
        ]);
        
        $storeTenantData = Tenant::create($request->all());
     
        $storeTenantDoaminData = Domain::create([
            'domain'=>Str::replace(' ', '_', $request->domain),
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        // Mail::to($request->email)->send(new RegisterOtpMail($randomOtp));
        if ($storeTenantData && $storeTenantDoaminData) {
            return true;
        }
    }

    protected function reconnect($request,$databaseProducationNameLowercase){
        // 2 = reconect to database
           DB::statement("CREATE DATABASE `$databaseProducationNameLowercase`");
           
           DB::purge('vts');
           Config::set('database.connections.mysql.database', $databaseProducationNameLowercase);
           DB::connection('mysql')->reconnect();
           DB::setDefaultConnection('mysql');
        

           // Run migrations for the tenant
           Artisan::call('migrate', [
               '--force' => true, // Force the migration to run without confirmation
           ]);
           Artisan::call('db:seed',[
            '--class' => 'TenantDefaultInformation'
           ]);
              
            // set admin from reques
           Admin::create([
                'first_name'=>$request->name,
                'last_name'=>null,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->mobile,
                'status'=>'super_admin',
           ]); 

           return true;
   }
}
