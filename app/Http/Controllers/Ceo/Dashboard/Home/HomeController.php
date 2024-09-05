<?php

namespace App\Http\Controllers\Ceo\Dashboard\Home;

use App\Http\Controllers\Controller;
use App\Models\Ceo\Consaltation;
use App\Models\Ceo\Tenant;
use App\Models\Ceo\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

           $tenantsThisYearGroupByMonthes = Tenant::select( 
                            DB::raw('MONTH(created_at) as month_number'), // Group by month of the created_at field
                            DB::raw('COUNT(*) as total_of_number')           // Count the number of records per month
                            )
                            ->whereYear('created_at', Carbon::now()->year) // Filter for the current year
                            ->groupBy(DB::raw('MONTH(created_at)'))        // Group by the month part of the date
                            ->whereStatus('active')
                            ->get();

            $visitThisMounthGroupByWeekly = Visit::select(DB::raw('
                             FLOOR((DAYOFMONTH(created_at) - 1) / 7) + 1 as week_number,
                             COUNT(*) as total'))
                            ->whereMonth('created_at', Carbon::now()->month) // Filter for the current month
                            ->whereYear('created_at', Carbon::now()->year)   // Filter for the current year
                            ->groupBy(DB::raw('FLOOR((DAYOFMONTH(created_at) - 1) / 7) + 1'))
                            ->get();       
         $consaltationThisYearGroupByMonthes = Consaltation::select( 
                                DB::raw('MONTH(created_at) as month_number'), // Group by month of the created_at field
                                DB::raw('COUNT(*) as total_of_number')           // Count the number of records per month
                                )
                                ->whereYear('created_at', Carbon::now()->year) // Filter for the current year
                                ->groupBy(DB::raw('MONTH(created_at)'))
                                ->get();        
        return view('Dashboard.Home.index',compact('tenantsThisYearGroupByMonthes','visitThisMounthGroupByWeekly','consaltationThisYearGroupByMonthes'));
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
