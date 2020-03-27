@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">

            <form action="/survey/{{$question->id}}-{{Str::slug($question->title)}}" method="post">
                <h1>{{$question->title}}</h1>

                @csrf

                @foreach ($question->mcq as $key => $mcq)

                    <div class="card mt-4">
                        <div class="card-header">
                            <strong>{{$key+1}}</strong> {{$mcq->mcq}}
                        </div>

                        <div class="card-body">

                            @error('responses.'.$key.'.answer_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
        
                            <ul class="list-group">

                                @foreach ($mcq->answers as $answer)
                                    <label for="answer{{$answer->id}}">
                                        <li class="list-group-item">
                                            <input type="radio" name="responses[{{$key}}][answer_id]" value="{{$answer->id}}" id="answer{{$answer->id}}" 
                                            class="mr-2" {{old('responses.'.$key.'.answer_id')==$answer->id ? 'checked' : ''}}>
                                            {{$answer->answer}}
                                            <input type="hidden" name="responses[{{$key}}][mcq_id]" value="{{$mcq->id}}">
                                         </li>
                                    </label>
                                @endforeach

                            </ul>

                        </div>

                    </div>
                    
                @endforeach

                <div class="card mt-4">
                    <div class="card-header">
                        Your Informations
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            @error('survey.name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <input name ="survey[name]" type="text" class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter Your Number" value="{{old('survey.name')}}">
                            <small id="titleHelp" class="form-text text-muted">Hello! What's your name?</small>                        
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            @error('survey.email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            <input name="survey[email]" type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" placeholder="Enter Your Email" value="{{old('survey.email')}}">
                            <small id="perposeHelp" class="form-text text-muted">Your Email Please!</small>

                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4 float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

