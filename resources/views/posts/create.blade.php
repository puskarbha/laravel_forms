
@extends('layouts.app')


@section('content')
    <h1 align="center">create page</h1>

    {!! Form::open([
    'method'=>'POST',
        'action'=> 'PostController@store'

    ]) !!}

    <div class="form-group">

        <table>
            <tr>
                <td> {!! Form::label('title','Title:') !!}</td>
                <td> {!! Form::text('title',null,['class'=>'form-control']) !!}</td>
            </tr>

<tr>
        <td>{!! Form::label('content','Content:') !!}</td>
        <td>{!! Form::text('content',null,['class'=>'form-control']) !!}</td>
</tr>

        <tr>
            <td>  {!! Form::label('user_id','User ID:') !!}</td>
            <td> {!! Form::text('user_id',null,['class'=>'form-control']) !!}</td>
        </tr>


      <tr>
          <td colspan="2" >{!! Form::submit('create Post',['class'=>'btn btn-primary']) !!}</td>
      </tr>


        </table>

    </div>



        {{csrf_field()}}
   {!! Form::close() !!}
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>



    @endif

@endsection
