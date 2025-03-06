@extends('layouts.app')

@section('title-block')
    Main page
@endsection


@section('content')
    <h1>Main page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda repellat ex eveniet nobis. Tempora aliquid, et velit odit cupiditate harum vel qui recusandae sapiente perspiciatis delectus aliquam molestias magnam?</p>
@endsection
    

@section('aside')
    @parent
    <p>Bonus text</p>
@endsection