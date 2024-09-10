<?php

namespace App\Http\Controllers\Ceo\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Auth.index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function login(AuthRequest $request)
    {
        if(!Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('auth.index')->with('faild','عفوا خطاء في تسجيل الدخول');
        }

        return redirect()->route('homes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index')->with('success','تم تسجيل الخروج بنجاح');
    }
}
