@extends('layouts.app')

@section('contant')
<h1>Contact Us</h1>
<div class="container">
    <div class="container">
        {{Form::open(['url' => 'contact/submit', 'method' => 'post']) }}

       <div class="form-group">
            {{ Form::label('name','name', ['class' => 'control-label']) }}
            {{ Form::text('name','', array_merge(['class' => 'form-control'])) }}
        </div>
        <div class="form-group">
                {{ Form::label('email', 'email', ['class' => 'control-label']) }}
                {{ Form::email('email','', array_merge(['class' => 'form-control'])) }}
        </div>
        <div class="form-group">
                    {{ Form::label('message', 'message', ['class' => 'control-label']) }}
                    {{ Form::textarea('message','', array_merge(['class' => 'form-control'])) }}
        </div>
        {{Form::submit('Click Me!',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
          </div>


@endsection
