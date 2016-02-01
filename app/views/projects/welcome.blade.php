<div id="sliderProjects" class="slider showRight">
	<div class="left carousel-control">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</div>
	<div class="right carousel-control">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div class="contenido">
		@foreach ($projects as $project)
		<div class="elemento">
			<div class="tituloSlide">
				<div class="titulo2">
					{{ $project->name }}
				</div>
			</div>
			<div class="contentSlide">
				{{ $project->description }}
			</div>
		</div>
		@endforeach
	</div>
</div>