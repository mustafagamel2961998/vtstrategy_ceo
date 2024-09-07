<?php

namespace App\Http\Controllers\Ceo\Dashboard\Datetime;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Datetime\DatetimeRequest;
use App\Models\Ceo\Datetime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DateTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datetimes = Datetime::latest()->get();
        return view('Dashboard.Datetime.index',compact('datetimes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Datetime.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DatetimeRequest $request)
    {
        $date_time = Carbon::parse($request->date_time)->format('Y-m-d h:i');
        $store = Datetime::create([
            'date_time'=>$date_time
        ]);
        return redirect()->route('datetimes.index')->with('success','تم إضافة الموعد بنجاح');
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
    public function update(DatetimeRequest $request, string $id)
    {
        $date_time = Carbon::parse($request->date_time)->format('Y-m-d h:i');
        $update = Datetime::find($id);
        $update->update([
            'date_time'=>$date_time
        ]);
        return redirect()->route('datetimes.index')->with('success','تم تعديل الموعد بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
