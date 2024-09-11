<?php

namespace App\Http\Controllers\Ceo\Guest\Consaltation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Guest\Consaltaion\ConsaltationRequest;
use App\Models\Ceo\Consaltation;
use App\Models\Ceo\Datetime;
use App\Models\Service;
use Illuminate\Http\Request;

class ConsaltationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        $datetimes = Datetime::latest()->get();
        return view('Guest.Consaltation.index',compact('services','datetimes'));
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
    public function store(ConsaltationRequest $request)
    {
        $store = Consaltation::create($request->all());
        return redirect()->route('guest.home.view')->with('success','تم إرسال طلب الحجز بنجاح');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
