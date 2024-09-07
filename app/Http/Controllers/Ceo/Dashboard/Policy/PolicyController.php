<?php

namespace App\Http\Controllers\Ceo\Dashboard\Policy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Policy\PolicyRequest;
use App\Models\Ceo\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policy = Policy::query()->first();
        return view('Dashboard.Policy.index',compact('policy'));
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
    public function update(PolicyRequest $request, string $id)
    {
        $update = Policy::find($id);
        $update->update([
            'content'=>$request->content,
        ]);

        if($request->hasFile('policy')){
            $update->clearMediaCollection('policy');
            $update->addMedia($request->file('policy'))
                    ->usingName($request->title)
                    ->toMediaCollection('policy');
        }
        return redirect()->route('policies.index')->with('success','تم تعديل السياسة والخصوصية بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
