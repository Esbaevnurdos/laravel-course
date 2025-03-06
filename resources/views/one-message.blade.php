@extends('layouts.app')

@section('title-block')
    {{$data->subject}}
@endsection
    
@section('content')
    <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info">
        <p>{{ $data -> message }}</p>
        <h3>{{ $data -> email }}</h3>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
    </div>
    
@endsection