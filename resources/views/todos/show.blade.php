@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary mb-3" href="/">Go back</a>
    <h1>{{$todo->text}}</h1>

    <div class="badge badge-danger">
        {{$todo->due}}
    </div>
    <hr>

    <p>{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-secondary">Edit</a>
    
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::hidden('_method', 'DELETE') }}
    {!! Form::close() !!}

@endsection