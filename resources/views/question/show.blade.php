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
                    <a class="btn btn-primary" href="/question/{{$question->id}}/mcq/create">Take Servey</a>
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
                                            {{-- <span class="badge badge-primary badge-pill">14</span> --}}
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