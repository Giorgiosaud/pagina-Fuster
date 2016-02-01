@extends('layouts.scaffold')

@section('main')

    <h1>Show Project</h1>

    <p>{{ link_to_route('projects.index', 'Return to All projects', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Order</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td class="col-xs-1">{{{ $project->order }}}</td>
            <td class="col-xs-2">{{{ $project->name }}}</td>
            <td class="col-xs-6">{{{ $project->description }}}</td>
            <td class="col-xs-3">
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
