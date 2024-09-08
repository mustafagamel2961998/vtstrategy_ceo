<?php

namespace App\Http\Controllers\Ceo\Dashboard\Rate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Rate\RateRequest;
use App\Models\Ceo\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rates = Rate::with('media')->latest()->get();
        return view('Dashboard.Rate.index',compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rate = new Rate();
        return view('Dashboard.Rate.create',compact('rate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RateRequest $request)
    {

        $store = Rate::create($request->all());

        if($request->hasFile('rate')){
            $store->addMedia($request->file('rate'))
                    ->usingName($request->name)
                    ->toMediaCollection('rate');
        } else {
            $store->copyMedia(public_path('assets/images/noPerson.png'))->toMediaCollection('rate');
        }
        return redirect()->route('rates.index')->with('success','تم إضافة تقيم العميل بنجاح');
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
        $rate = Rate::find($id);
        return view('Dashboard.Rate.edit',compact('rate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RateRequest $request, string $id)
    {
        
        $update = Rate::find($id);
        $update->update($request->all());
        if($request->hasFile('rate')){
            $update->clearMediaCollection('rate');
            $update->addMedia($request->file('rate'))
                    ->usingName($request->name)
                    ->toMediaCollection('rate');
        }
        return redirect()->route('rates.index')->with('success','تم تعديل تقيم العميل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Rate::find($id);
        $delete->clearMediaCollection('rate');
        $delete->delete();
        return redirect()->route('rates.index')->with('success','تم حذف تقيم العميل بنجاح');
    }
}
