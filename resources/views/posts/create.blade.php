@extends('layouts.app')


@section('content')
    <h1 align="center">create page</h1>
    <form method="post" action="/post">
        <label>
            <input type="text" name="title" placeholder="Enter title">
        </label>

        <label>
            <input type="text" name="content" placeholder="Enter the content">
        </label>
        <label>
            <input type="text" name="user_id" placeholder="Enter user ID">
        </label>
        <input type="submit" name="submit">
        {{csrf_field()}}
    </form>
@stop

