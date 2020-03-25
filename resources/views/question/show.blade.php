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
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection