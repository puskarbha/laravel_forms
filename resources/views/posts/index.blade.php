@extends('layouts.app')

@section('content')
    <h1 align="center">index page</h1>
    <ul>
      @foreach($posts as $post)
          <div class="image-container">
              <img height='100' src="{{$post->path}}" alt="image Not found">
          </div>
         <li>
             <a href="{{route('post.show',$post->id)}}">{{$post->title}}</a>
content:{{$post->content}}
             user_id: {{$post->user_id}}
         </li>
          </ul>
    @endforeach
@endsection

@section('footer')

@endsection
