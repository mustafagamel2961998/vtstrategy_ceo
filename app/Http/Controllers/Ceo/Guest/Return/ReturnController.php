<?php

namespace App\Http\Controllers\Ceo\Guest\Return;

use App\Http\Controllers\Controller;
use App\Models\Ceo\Returnpolicy;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index(){
        $return = Returnpolicy::query()->first();
        return view('Guest.return.index',compact('return'));
    }
}
