<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Questions::all();
        return view('questions.index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required',
        ]);
        
        auth()->user()->questions()->create([
            'question' => $data['question'],
        ]);
        
        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $question)
    {
        $answers = $question->answers;
        
        return view('questions.show', [
            'user' => $question->user,
            'question' => $question,
            'answers' => $answers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $question)
    {
        return view('questions.edit', [
            'question' => $question,
        ]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $question)
    {
        $data = $request->validate([
            'question' => 'required',
        ]);
        
        $question->update([
            'question' => $data['question'],
        ]);
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $question)
    {
        $question>delete();
    }
}
