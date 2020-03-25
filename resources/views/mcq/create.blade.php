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

            <form action="/question/{{$question->id}}/mcq" method="POST" > 
                     @csrf
                
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name ="mcq[mcq]" type="title" class="form-control" id="exampleInputtitle" aria-describedby="mcqHelp" placeholder="Add New MCQ Question" value="{{old('mcq.mcq')}}">
                        <small id="titleHelp" class="form-text text-muted">Set the new MCQ question</small>
        
                        @error('mcq.mcq')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                      
                    </div>

                    <h3>Choices</h3>

                    <div class="form-group">
                        <label for="answer">Choice 1</label>
                        <input name="answers[][answer]" type="answer" class="form-control" id="exampleInputtitle" 
                        aria-describedby="perposeHelp" placeholder="Enter answer" value="{{old('answers.0.answer')}}">
                        <small id="perposeHelp" class="form-text text-muted">Set the new quectionnire answer.</small>
        
                        @error('answers.0.answer')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="answer">Choice 2</label>
                        <input name="answers[][answer]" type="answer" class="form-control" id="exampleInputtitle" 
                        aria-describedby="perposeHelp" placeholder="Enter answer" value="{{old('answers.1.answer')}}">
                        <small id="perposeHelp" class="form-text text-muted">Set the new quectionnire answer.</small>
        
                        @error('answers.1.answer')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="answer">Choice 3</label>
                        <input name="answers[][answer]" type="answer" class="form-control" id="exampleInputtitle" 
                        aria-describedby="perposeHelp" placeholder="Enter answer" value="{{old('answers.2.answer')}}">
                        <small id="perposeHelp" class="form-text text-muted">Set the new quectionnire answer.</small>
        
                        @error('answers.2.answer')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="answer">Choice 4</label>
                        <input name="answers[][answer]" type="answer" class="form-control" id="exampleInputtitle" 
                        aria-describedby="perposeHelp" placeholder="Enter answer" value="{{old('answers.3.answer')}}">
                        <small id="perposeHelp" class="form-text text-muted">Set the new quectionnire answer.</small>
        
                        @error('answers.3.answer')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <a class="btn btn-primary" href="/home">Back</a>
                    <button class="btn btn-dark">Create Question</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection