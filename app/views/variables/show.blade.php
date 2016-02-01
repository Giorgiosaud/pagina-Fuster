@extends('layouts.scaffold')

@section('main')

    <h1>Show Variable</h1>

    <p>{{ link_to_route('variables.index', 'Return to All variables', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td class="col-xs-2">{{{ $variable->name }}}</td>
            <td class="col-xs-8">{{ $variable->description }}</td>
            <td class="col-xs-2">
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('variables.destroy', $variable->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('variables.edit', 'Edit', array($variable->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
