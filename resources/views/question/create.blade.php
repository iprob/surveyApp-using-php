@extends('layouts.app')

@section('content')
<div class="container">
    <div class="column justify-content-center">
        
        <form action="/question" method="POST" > 
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
            <input  name ="title" type="title" class="form-control" id="exampleInputtitle" aria-describedby="titleHelp" placeholder="Enter title" value="{{old('title')}}">
              <small id="titleHelp" class="form-text text-muted">Set the new quectionnire title.</small>

                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              
            </div>
            <div class="form-group">
                <label for="purpose">Perpose</label>
                <input name="purpose" type="purpose" class="form-control" id="exampleInputtitle" aria-describedby="perposeHelp" placeholder="Enter purpose" value="{{old('purpose')}}">
                <small id="perposeHelp" class="form-text text-muted">Set the new quectionnire purpose.</small>

                @error('purpose')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <a class="btn btn-primary" href="/home">Back</a>
            <button class="btn btn-dark">Create Question</button>
        </form>
    </div>
</div>
@endsection