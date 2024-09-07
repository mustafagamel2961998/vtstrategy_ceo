<?php

namespace App\Http\Controllers\Ceo\Guest\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Guest\Contact\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Guest.contact.contact');
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
    public function store(ContactRequest $request)
    {
    
        $store = Contact::create($request->all());
        return redirect()->route('home.view')->with('success','تم إرسال رسالتك بنجاح');
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
