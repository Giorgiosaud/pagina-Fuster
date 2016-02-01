<div id="sliderServices" class="slider">
	<div class="left carousel-control">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</div>
	<div class="right carousel-control">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div class="contenido">
		<div class="elemento">
			<div class="indiceServicios">
<?php
$i = 0
?>
<div class="todosLosIndicesServicios">
					@foreach ($services as $service)
					@if($i==0||$i%2==0)

					<div class="colIndiceServicio">
						<div class="tituloDeServicio {{ $service->size}}" data-referencia="{{ $service->shortName}}">
							{{ $service->name }}
						</div>
						@else
						<div class="tituloDeServicio {{ $service->size}}" data-referencia="{{ $service->shortName}}">
							{{ $service->name }}
						</div>
					</div>
					@endif
<?php $i++?>
					@endforeach
				</div>
			</div>
		</div>
		@foreach ($services as $service)
		<div class="elemento {{ $service->shortName }}">
			<div class="tituloSlide">
				<div class="titulo2">
					{{ $service->name }}
				</div>
			</div>
			<div class="contentSlide">
				{{ $service->description }}
			</div>
		</div>
		@endforeach
	</div>
</div>