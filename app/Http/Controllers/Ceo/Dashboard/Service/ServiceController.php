<?php

namespace App\Http\Controllers\Ceo\Dashboard\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Service\CounterOfNumberRequest;
use App\Http\Requests\Ceo\Web\Dashboard\Service\ServiceRequest;
use App\Models\Ceo\Counterofnumber;
use App\Models\Ceo\Service;
use App\Models\Ceo\Setting;
use Illuminate\Http\Request;
use League\Glide\Server;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        $setting = Setting::query()->first();
        $counterofnumber = Counterofnumber::query()->first();

        return view('Dashboard.Service.index',compact('services','setting','counterofnumber'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = new Service();
        return view('Dashboard.Service.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $store = Service::create($request->all());
        return redirect()->route('services.index')->with('success','تم إضافة الخدمة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('Dashboard.Service.edit',compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, string $id)
    {

        $service = Service::find($id);
        $service->update($request->all());
                
        return redirect()->route('services.index')->with('success','تم تعديل الخدمة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Service::find($id);
        $delete->delete();
        return redirect()->route('services.index')->with('success','تم حذف الخدمة بنجاح');
    }

    public function counterOfNumbersView(){

        $counterOfNumber = Counterofnumber::query()->first();
        return view('Dashboard.Service.counter_of_numbers',compact('counterOfNumber'));

    }

    public function counterOfNumbers(CounterOfNumberRequest $request,$id){

        $counterOfNumberUpdate = Counterofnumber::find($id);
        $counterOfNumberUpdate->update($request->all());
        return redirect()->route('services.index')->with('success','تم تعديل عداد الخدمات بنجاح');


    }
}
