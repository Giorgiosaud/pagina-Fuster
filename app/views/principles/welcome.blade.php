<div id="sliderPrinciples" class="slider showRight">
		<div class="left carousel-control">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</div>
		<div class="right carousel-control">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</div>
	<div class="contenido">
		@foreach ($principles as $principle)
		<div class="elemento">
			<div class="tituloSlide">
				<div class="numero">
					{{ $principle->order }}
				</div>
				<div class="titulo">
					{{ $principle->name }}
				</div>
			</div>
			<div class="contentSlide">
				{{ $principle->description }}
			</div>
		</div>
		@endforeach
	</div>
</div>