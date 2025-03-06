@extends('layouts.app')

@section('title-block')
    All messages
@endsection
    
@section('content')
    <h1>All messages</h1>
    @foreach ($data as $l) 
    <div class="alert alert-info">
        <h3>{{ $l -> email }}</h3>
        <a href="{{ route('contact-data-one', $l->id) }}"><button class="btn btn-warning">Detailed</button></a>
    </div>
    
    @endforeach
@endsection