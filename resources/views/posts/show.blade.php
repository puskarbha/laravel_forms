@extends('layouts.app')
@section('content')
    <h1 align="center">show page</h1>

        {{--    this also works finr--}}
{{--<h2><a href="/post/{{$post->id}}/edit">{{$post->title}}</a></h2>--}}


        {{--    or can also be done as --}}
    <h2><a href="{{route('post.edit',$post->id)}}">{{$post->title}}</a></h2>

@endsection
