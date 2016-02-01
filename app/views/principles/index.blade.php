@extends('layouts.scaffold')

@section('main')

<h1>All Principles</h1>

<p>{{ link_to_route('principles.create', 'Add New Principle', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($principles->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Order</th>
				<th>Description</th>

				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($principles as $principle)
				<tr>
					<td class="col-xs-1">{{{ $principle->name }}}</td>
					<td class="col-xs-1">{{{ $principle->order }}}</td>
					<td class="col-xs-8">{{{ $principle->description }}}</td>

                    <td class="col-xs-2">
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('principles.destroy', $principle->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('principles.edit', 'Edit', array($principle->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no principles
@endif

@stop
