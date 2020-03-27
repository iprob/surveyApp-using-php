<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests\CreateResponseRequest;

class SurveyController extends Controller
{
    public function show(Question $question, $slug)
    {
       $question->load('mcq.answers');

        return view('survey.show', compact('question'));
    }

    public function store( CreateResponseRequest $request, Question $question)
    {
        $survey= $question->surveys()->create($request->input('survey'));
        $survey->responses()->createMany($request->input('responses'));
        dd($survey->all());
    }
}
