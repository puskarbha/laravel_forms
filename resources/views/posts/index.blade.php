@extends('layouts.app')

@section('content')
    <h1 align="center">index page</h1>
    <ul>
      @foreach($posts as $post)
         <li>
             <a href="{{route('post.show',$post->id)}}">{{$post->title}}</a>

         </li>
          </ul>
    @endforeach
@endsection

@section('footer')

@endsection
