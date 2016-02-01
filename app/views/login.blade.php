@extends('layouts.main2')
@section('content')
    <div class="col-xs-push-3 col-xs-6">
    {{ Form::open(array('url' => 'login','role'=>'form')) }}

    <legend>Login</legend>

    <!-- if there are login errors, show them here -->
        @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            </ul>
        @endif
    {{--<p>--}}
    <!-- Email Form Input -->
    <div class="form-group">
        {{ Form::label('email','Email')}}
        {{Form::text('email', Input::old('email') ,['class'=>'form-control','placeholder'=>'something@something.foo'])}}
    </div>
    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password','Password')}}
        {{Form::password('password',['class'=>'form-control'])}}
    </div>
    {{ Form::submit('Submit!',['class'=>'btn btn-primary']) }}
    {{ Form::close() }}
    </form>
    </div>
@stop
