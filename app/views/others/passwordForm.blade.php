@extends('layouts.scaffold')

@section('main')
    {{Form::open(array('method'=>'PATCH','url'=>'password/'.Auth::id(),'role'=>'form'))}}
    <legend>Password Change</legend>
    <!-- OldPassword Form Input -->
    {{--@foreach ($messages->all() as $message))--}}
    {{--{{$message}}--}}
    {{--@endforeach--}}

    {{Form::hidden('email',Auth::user()->email)}}
    <div class="form-group">
        {{ Form::label('oldPassword','Old Password')}}
        {{Form::password('oldPassword',['class'=>'form-control'])}}
    </div>
    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password','New Password')}}
        {{Form::password('password',['class'=>'form-control'])}}
    </div>
    <!-- Password_confirmation Form Input -->
    <div class="form-group">
        {{ Form::label('password_confirmation','New Password Confirmation')}}
        {{Form::password('password_confirmation',['class'=>'form-control'])}}
    </div>
    {{Form::submit('Cambiar',['class'=>"btn btn-primary"])}}
{{Form::close()}}
@stop