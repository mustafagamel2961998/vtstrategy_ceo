<?php

namespace App\Http\Controllers\Ceo\Dashboard\Term;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Term\TermRequest;
use App\Models\Ceo\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $term = Term::query()->with('media')->first();
        return view('Dashboard.Term.index',compact('term'));
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
    public function store(TermRequest $request)
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
    public function update(TermRequest $request, string $id)
    {
        $update = Term::find($id);
        if($request->hasFile('term')){
            $update->clearMediaCollection('term');

            $update->addMedia($request->file('term'))
                    ->toMediaCollection('term');
        }
        $update->update($request->all());
        return redirect()->route('terms.index')->with('success','تم تعديل الشروط بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
