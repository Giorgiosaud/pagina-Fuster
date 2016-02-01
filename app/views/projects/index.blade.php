@extends('layouts.scaffold')

@section('main')

<h1>All Projects</h1>

<p>{{ link_to_route('projects.create', 'Add New Project', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($projects->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Order</th>
				<th>Name</th>
				<th>Description</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($projects as $project)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no projects
@endif

@stop
