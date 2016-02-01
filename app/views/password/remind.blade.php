@extends('layouts.scaffold')

@section('main')
    {{Form::open(array('role'=>'form' ))}}
    <legend>Password Change</legend>
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        </ul>
    @endif
    <div class="form-group">
        {{ Form::label('email','Email')}}
        {{Form::email('email', Auth::user()->email ,['class'=>'form-control','placeholder'=>''])}}
    </div>

    {{--<div class="form-group">--}}
        {{--{{ Form::label('password','Old Password')}}--}}
        {{--{{Form::password('password',['class'=>'form-control'])}}--}}
    {{--</div>--}}
    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('new_password','New Password')}}
        {{Form::password('new_password',['class'=>'form-control'])}}
    </div>
    <!-- Password_confirmation Form Input -->
    <div class="form-group">
        {{ Form::label('new_password_confirmation','New Password Confirmation')}}
        {{Form::password('new_password_confirmation',['class'=>'form-control'])}}
    </div>
    {{Form::submit('Cambiar',['class'=>"btn btn-primary"])}}
    {{Form::close()}}
@stop