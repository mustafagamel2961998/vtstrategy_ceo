<?php

namespace App\Http\Controllers\Ceo\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Customer\CustomerRequest;
use App\Models\Ceo\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('media')->latest()->get(); 
        return view('Dashboard.Customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = new Customer();
        return view('Dashboard.Customer.create',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        $store = Customer::create($request->all());
        
        if($request->hasFile('customer')){
            $store->addMedia($request->file('customer'))
                    ->usingName($request->company_name)
                    ->toMediaCollection('customer');
        }
        return redirect()->route('customers.index')->with('success','تم إضافة العميل بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('Dashboard.Customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerRequest $request, string $id)
    {
        $update = Customer::find($id);
        $update->update($request->all());
        if($request->hasFile('customer')){
            $update->clearMediaCollection('customer');
            $update->addMedia($request->file('customer'))
                    ->usingName($request->company_name)
                    ->toMediaCollection('customer');
        }
        return redirect()->route('customers.index')->with('success','تم تعديل  بيانات العميل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Customer::find($id);
        $delete->clearMediaCollection('customer');
        $delete->delete();
        return redirect()->route('customers.index')->with('success','تم حذف  بيانات العميل بنجاح');

    }
}
