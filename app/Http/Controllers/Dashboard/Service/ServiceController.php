<?php

namespace App\Http\Controllers\Dashboard\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Service\ServiceRequest;
use App\Models\Ceo\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('media')->latest()->get();
        // return view()
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $store = Service::create($request->all());
        // return redirect()->route()->with('success','تم إضافة الخدمة بنجاح');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, string $id)
    {

        $service = Service::find($id);
        $service->update($request->all());
                
        // return redirect()->route()->with('success','تم تعديل الخدمة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Service::find($id);
        $delete->delete();

        // return redirect()->route()->with('success','تم حذف الخدمة بنجاح');

    }
}
