@extends('layouts.app')
@section('content')
    <h1 align="center">Edit Post</h1>

    {!! Form::open([
    'method'=>'POST',
        'action'=> 'PostController@store'

    ]) !!}

     {!! Form::label('title','Title:') !!}
     {!! Form::text('title',null,['class'=>'form-control']) !!}
        {{csrf_field()}}
    {!! Form::submit('update post',['class'=>'btn btn-info']) !!}



    <form method="post" action="/post/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">
    {!! Form::close() !!}
@endsection
