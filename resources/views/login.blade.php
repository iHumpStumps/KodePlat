@extends('layouts.app')
@section('content')
<div class="content">
    {{Form::open(array('url'=>'login'))}}
    <p>
        {{Form::label('email', 'Email address')}}
        {{Form::text('email', Input::old('email'), array('placeholder'=>'example@example.com'))}}
    </p>
    <p>
        {{Form::label('password', 'Lösenord')}}
        {{Form::password('password', array('placeholder'=>'*******'))}}
    </p>
    <p>
        {{Form::submit('Logga in')}}
    </p>
    {{Form::close()}}
</div>
@endsection