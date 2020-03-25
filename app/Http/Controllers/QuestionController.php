<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests\CreateQuestion;


class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create( Request $request){

        $question= new Question;
        return view('question.create',compact('question'));

    }

    public function store(Question $question, CreateQuestion $request){

        
        $question->title = $request->title;
        $question->purpose = $request->purpose;
        $question->user_id = auth()->id();
        $question->save();
        
       // return redirect('/question/'.$question->id);
       return redirect('/home');
        
    }

    public function show(Question $question)
    {
        return view('question.show', compact('question'));
    }
    public function edit(Question $question)
    {
        return view('question.edit', compact('question'));
    }
}
