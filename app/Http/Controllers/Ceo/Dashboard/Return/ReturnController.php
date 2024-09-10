<?php

namespace App\Http\Controllers\Ceo\Dashboard\Return;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Return\ReturnRequest;
use App\Models\Ceo\Returnpolicy;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $return = Returnpolicy::query()->first();
        return view('Dashboard.Return.index',compact('return'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReturnRequest $request, string $id)
    {
        $update = Returnpolicy::find($id);
        if($request->hasFile('return')){
            $update->clearMediaCollection('return');

            $update->addMedia($request->file('return'))
                    ->toMediaCollection('return');
        }
        $update->update($request->all());
        return redirect()->route('returns.index')->with('success','تم تعديل محتوي سياسة الاسترجاع بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
