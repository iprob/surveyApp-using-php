<?php

namespace App\Http\Controllers;

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

    public function store( CreateMcqRequest $mcq, Question $question)
    {

        dd($mcq->all());
        
        //$questtion->mcq()->create($mcq);

        foreach ($variable as $key => $value) {
            # code...
        }

        //return view('mcq.create' ,compact('question'));
    }
}
