<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMcqRequest;
use App\Question;

class McqController extends Controller
{
    public function create( Question $question)
    {
        //dd($question->title);

        return view('mcq.create' ,compact('question'));
    }

    public function store( CreateMcqRequest $request, Question $question)
    {
        $mcq = $question->mcq()->create($request->input('mcq'));
        $mcq->answers()->createMany($request->input('answers'));

        return view('/question');
    }
}
