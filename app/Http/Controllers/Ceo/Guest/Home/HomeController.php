<?php

namespace App\Http\Controllers\Ceo\Guest\Home;

use App\Http\Controllers\Controller;
use App\Models\Ceo\Article;
use App\Models\Ceo\Counterofnumber;
use App\Models\Ceo\Customer;
use App\Models\Ceo\Question;
use App\Models\Ceo\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('status','active')->latest()->take(6)->get();
        $counter_of_numbers = Counterofnumber::query()->first();
        $latest_six_articles = Article::where('status','active')->with('media')->latest()->take(6)->get();
        $latest_six_customers = Customer::where('status','active')->latest()->take(6)->get(); 
        $questions = Question::where('status','active')->latest()->get();
        return view('Guest.Home.index',compact('services','counter_of_numbers','latest_six_articles','latest_six_customers','questions'));
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
