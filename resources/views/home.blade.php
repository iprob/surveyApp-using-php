@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Set new Question</div>

                <div class="card-body">
                
                @foreach ($questions as $question)
                <a href="{{url('/question/'.$question->id)}}" class="btn btn-dark">
                    <div class="card-body">
                        <h3>{{$question->title}}</h3>
                    </div>
                </a>
                @endforeach
                
                </div>

                <div class="card-body">
                    <a href="/question/create" class="btn btn-dark">create new Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
