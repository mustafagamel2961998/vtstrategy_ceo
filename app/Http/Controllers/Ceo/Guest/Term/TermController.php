<?php

namespace App\Http\Controllers\Ceo\Guest\Term;

use App\Http\Controllers\Controller;
use App\Models\Ceo\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index(){
        $term = Term::query()->first();
        return view('Guest.terms.index',compact('term'));
    }
}
