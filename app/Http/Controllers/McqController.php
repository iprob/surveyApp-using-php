<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMcqRequest;
use App\Question;

class McqController extends Controller
{
    public function create( Question $question)
    {

        return view('mcq.create' ,compact('question'));
    }

    public function store( CreateMcqRequest $request, Question $question)
    {
        $mcq = $question->mcq()->create($request->input('mcq'));
        $mcq->answers()->createMany($request->input('answers'));

        return redirect('/question/'.$question->id);
    }


}
