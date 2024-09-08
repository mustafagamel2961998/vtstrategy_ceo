<?php

namespace App\Http\Controllers\Ceo\Dashboard\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Question\QuestionRequest;
use App\Models\Ceo\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::latest()->get();
        return view('Dashboard.Question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $question = new Question();
        return view('Dashboard.Question.create',compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request)
    {
        Question::create($request->all());
        return redirect()->route('questions.index')->with('success','تم إضافة السؤال والاجابة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $question = Question::find($id);
        return view('Dashboard.Question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionRequest $request, string $id)
    {
        $update = Question::find($id);
        $update->update($request->all());
        return redirect()->route('questions.index')->with('success','تم تعديل السؤال والاجابة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Question::find($id);
        $delete->delete();
        return redirect()->route('questions.index')->with('success','تم حذف السؤال والاجابة بنجاح');

    }
}
