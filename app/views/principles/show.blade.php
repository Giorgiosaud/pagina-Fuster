@extends('layouts.scaffold')

@section('main')

    <h1>Show Principle</h1>

    <p>{{ link_to_route('principles.index', 'Return to All principles', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Order</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td class="col-xs-1">{{{ $principle->name }}}</td>
            <td class="col-xs-1">{{{ $principle->description }}}</td>
            <td class="col-xs-8">{{{ $principle->order }}}</td>
            <td class="col-xs-2">
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('principles.destroy', $principle->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('principles.edit', 'Edit', array($principle->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
