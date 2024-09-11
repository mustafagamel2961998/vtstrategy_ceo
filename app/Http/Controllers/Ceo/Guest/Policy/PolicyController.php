<?php

namespace App\Http\Controllers\Ceo\Guest\Policy;

use App\Http\Controllers\Controller;
use App\Models\Ceo\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index(){
        $policy = Policy::query()->first();
        return view('Guest.policies.index',compact('policy'));
    }
}
