<?php

namespace App\Http\Controllers\Ceo\Guest\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Guest\Auth\LoginRequest;
use App\Models\Admin;
use App\Models\Ceo\Domain;
use App\Models\Ceo\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('Guest.auth.login');
    }

    public function loginMethod(LoginRequest $request){
        $tenant = Tenant::where('email',$request->email)->first();
     
        if($tenant->status!='active'){
            return redirect()->route('login.view')->with('faild','عفوا المنصه غير مفعله');
        }

        DB::purge('vts');
        Config::set('database.connections.mysql.database', $tenant->database_name); // domain is the same with database name
        DB::connection('mysql')->reconnect();
        DB::setDefaultConnection('mysql');


        $getAdmin = Admin::where('email',$request->email)->first();

        if(!Hash::check($request->password,$getAdmin->password)){
            return redirect()->route('login.view')->with('faild','عفوا بيانات الدخول خطأ');
        }
        Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
   
        return redirect()->away('https://' . $tenant->domain . '.vtstrategy.org/admin/index');
    }

}
