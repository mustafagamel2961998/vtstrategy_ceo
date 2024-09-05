<?php

namespace App\Http\Controllers\Ceo\Dashboard\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Setting\SettingRequest;
use App\Models\Ceo\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
        $setting = Setting::find($id);
        return view('Dashboard.Service.maininfo',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, string $id)
    {
        $update = Setting::find($id);
        return redirect()->route('services.index')->with('success','تم تعديل الاعدادت بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
