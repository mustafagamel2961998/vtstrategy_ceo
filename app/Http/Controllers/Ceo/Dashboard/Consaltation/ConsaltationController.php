<?php

namespace App\Http\Controllers\Ceo\Dashboard\Consaltation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\ConsaltaionPostponedRequest;
use App\Models\Ceo\Consaltation;
use App\Models\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ConsaltationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consaltations = Consaltation::where('status','<>','postponed')->with('service')->latest()->get();
        $PostponedConsaltationsCount = Consaltation::where('status','postponed')->count();

        return view('Dashboard.Consaltation.index',compact('consaltations','PostponedConsaltationsCount'));
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
    public function update(Request $request, string $id)
    {
        $update = Consaltation::find($id);
        $update->update([
            'status'=>'success',
        ]);
        return redirect()->route('consaltaions.index')->with('success','تم تعديل حالة الاستشارة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function consaltaionPostponedView(){
        $PostponedConsaltations = Consaltation::where('status','postponed')->latest()->get();
        return view('Dashboard.Consaltation.postponed',compact('PostponedConsaltations'));
    }
    
    public function consaltaionPostponed(Request $request,$id){
         
        $update = Consaltation::find($id);
        $update->update([
            'date_time'=>Carbon::parse($update->date_time)->addDay(2),
            'status'=>'postponed',
        ]);
        return redirect()->route('consaltaions.index')->with('success','تم تأجيل الاستشارة بنجاح');
    }
}
