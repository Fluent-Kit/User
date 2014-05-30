@extends('layouts.login')

@section('content')
    {{ Form::open(array('url' => 'login')) }}
        {{ Form::token() }}
        {{ Form::label('email', 'Email Address') }}
        {{ Form::email('email', Input::get('email')) }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::submit('Login') }}
    {{ Form::close() }}
@stop