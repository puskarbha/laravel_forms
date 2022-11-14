@extends('layouts.app')
@section('content')
    <h1 align="center">Edit Post</h1>

    {!! Form::model(
    $post,
    [
    'method'=>'PATCH',
    'action'=> ['PostController@update',$post->id]

    ]
    ) !!}

     {!! Form::label('title','Title:') !!}
     {!! Form::text('title',null,['class'=>'form-control']) !!}
        {{csrf_field()}}
    {!! Form::submit('update post',['class'=>'btn btn-info']) !!}


    {!! Form::close() !!}

    {!! Form::open(

   [
   'method'=>'DELETE',
   'action'=> ['PostController@destroy',$post->id]

   ]
   ) !!}
        {{csrf_field()}}

        {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection
