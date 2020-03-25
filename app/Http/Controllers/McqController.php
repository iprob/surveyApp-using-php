<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMcq;
use App\Question;

class McqController extends Controller
{
    public function create( Question $question)
    {
        //dd($question->title);

        return view('mcq.create' ,compact('question'));
    }

    public function store( CreateMcq $mcq, Question $question)
    {

        dd($mcq->all());
        
        //$questtion->mcq()->create($mcq);

        foreach ($variable as $key => $value) {
            # code...
        }

        //return view('mcq.create' ,compact('question'));
    }
}
