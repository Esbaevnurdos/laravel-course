@extends('layouts.app')

@section('title-block')
    Reinstall zapici
@endsection



@section('content')
    <h1>Reload zapici</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf
     
        <div class="form-group">
            <label for="name">Write name</label>
            <input type="text" name="name" placeholder="write name" value="{{ $data -> name}}" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Write email</label>
            <input type="text" name="email" placeholder="write email" value="{{ $data -> email}}" id="email" class="form-control">
        </div>
  
        <div class="form-group">
            <label for="message"> message</label>
            <textarea name="message" id="message" class="form-control" value="{{ $data -> message}}" placeholder="write message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Reload</button>
    </form>
@endsection
    

