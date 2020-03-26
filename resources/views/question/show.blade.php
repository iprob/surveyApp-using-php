@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    {{$question->title}}
                </div>

                <div class="card-body">
                    <a class="btn btn-dark" href="/question/{{$question->id}}/mcq/create">Create MCQ</a>
                    <a class="btn btn-success" href="/question/{{$question->id}}-{{Str::slug($question->title)}}">Take Servey</a>
                    <a class="btn btn-dark" href="/home">Home</a>
                </div>
                
            </div>

                        @foreach ($question->mcq as $mcq)

                            <div class="card mt-4">

                           
                                <div class="card-header bg-info text-white">{{$mcq->mcq}}</div>
                                <div class="card-body">

                                    @foreach ($mcq->answers as $answer)
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                
                                                {{$answer->answer}}
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                            
                        @endforeach
                
        </div>
    </div>
</div>

@endsection