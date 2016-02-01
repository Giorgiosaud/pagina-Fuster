@extends('layouts.main')
@section('content')
<div class="basePanel">
    <div id="imagenContacto"></div>
	{{--<div id="imagenMain"></div>--}}
<div id="separador">
	<div class="conteneLogo">
		<div class="logoF logo">
			<img class="logoTopF" src="img/logo/top.png" alt="Top">
			<div class="clearfix"></div>
		</div>
		<div class="logoFuster logo">
			<img src="img/logo/bottom.png" alt="Bottom">
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="descripcion">
		@foreach ($variables as $variable)
		@if($variable->name =="Shortdescription")
		{{{  $variable->description }}}
		@endif
		@endforeach
	</div>

</div>
<!-- <div class="flecha flin"></div> -->
</div>

<nav id="barraNavegacion">
    <ul>
        <li><a href="#pantallaInicio"><img class="imgNav" src="img/logo/logoCompleto.png" alt="Logo"></a></li>
        <li id="Principles" class="menuElement" ><a href="#pantalla6">Principles</a></li>
        <li id="Capabilities" class="menuElement"><a href="#pantalla7">Capabilities</a></li>
        <li id="Services" class="menuElement"><a href="#pantalla8">Services</a></li>
        <li id="Projects" class="menuElement"><a href="#pantalla9">Projects</a></li>
        <li id="Contact" class="menuElement"><a href="#pantalla11">Contact Us</a></li>
    </ul>
    <div id="arrowBottom"></div>
</nav>
<section class="pantalla" id="pantalla1">

</section>

<!-- <div id="trigger1"></div> -->
<section class="pantalla" id="pantalla2">

</section>
<section class="pantalla" id="pantalla3">

</section>
<section class="pantalla" id="pantalla4">

</section>
<section class="pantalla" id="pantalla5">

</section>
<section class="pantalla" id="pantalla6">
    @include('principles.welcome')
</section>
<section class="pantalla" id="pantalla7">
    <article id="sectionCapabilities">
        @foreach ($variables as $variable)
        @if($variable->name =="Description")
        {{ $variable->description }}
        @endif
        @endforeach
    </article>
</section>
<section class="pantalla" id="pantalla8">
    @include('services.welcome')
</section>
<section class="pantalla" id="pantalla9">
    @include('projects.welcome')

</section>
<section class="pantalla" id="pantalla10">


</section>
<section class="pantalla" id="pantalla11">
    <div id="sliderContacts" class="slider">
        <div class="elemento">

            <div class="tituloSlide tituloProjects">
                <div class="titulo">Contact Us</div>
            </div>
            <div class="contentSlide text-left">
                @foreach ($variables as $variable)
                @if($variable->name =="Address")
                {{  $variable->description }}
                @endif
                @endforeach

            </div>
            <div class="contactButton bottomForm btn btn-primary">
                <span class="glyphicon glyphicon-envelope"aria-hidden="true"></span>
                Contact Us
            </div>
        </div>
    </div>
</section>
<script>
	jQuery(document).ready(function($) {


		var controller = new ScrollMagic({
			globalSceneOptions:{
				duration: $(window).height(),
				triggerHook: "onLeave"
			}
		});

		svgElement1 = $(".svgLogo");

		var tweenInit = new TweenMax.fromTo(svgElement1,2,{css:{'fill-opacity':'0','opacity':'0'}},{css:{'fill':'white','fill-opacity':'1','opacity':'1'}});


		//pantalla1
		$(window).load(function() {
			console.log(getCenterArrowPosition($('#Principles')));
		var tween = new TimelineMax()
		.add(TweenMax.fromTo("#separador", 0.5,
			{"margin-right": "-10%"},
			{"margin-right": "10%","width":"20%"})
		)
		.add(TweenMax.fromTo('.conteneLogo',0.5,
			{'margin-top':"-500px"},
			{'margin-top':"40%"}
			)
		)
		.add(TweenMax.from(".logoFuster img",0.5,
			{"margin-top": "1000%"}
			)
		);
		var scene = new ScrollScene({
			triggerElement: "#pantalla1"
		})
		.setTween(tween)
		.addTo(controller);
		// scene.addIndicators();

	//pantalla2
	var tween=new TimelineMax()
	.add(TweenMax.to(".conteneLogo",0.6,
		{"margin-top":"35%","scale":0.4})
	)
	.add(TweenMax.fromTo(".descripcion",0.5,
		{"margin-top": "300%"},
		{"margin-top": "10%"})
	);
	var scene = new ScrollScene({
		triggerElement: "#pantalla2",
		})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	//pantalla3
	var tween=new TimelineMax()
	.add(TweenMax.to('.conteneLogo,.descripcion',0.5,{
				opacity:0,"display":"none"
			})
	);
	var scene = new ScrollScene({
		triggerElement: "#pantalla3",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	// //pantalla4
	var tween=new TimelineMax()
	.add(TweenMax.to('#separador',0.5,{
				"width":"100%","margin-right":0
			})
	)
	.add(TweenMax.fromTo('#barraNavegacion',0.5,{"margin-top":"-"+($('#barraNavegacion').height()*100)+"px"},{"margin-top":"0%"})
	);
	var scene = new ScrollScene({
		triggerElement: "#pantalla4",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	// //pantalla5
	var tween=new TimelineMax()
	.add(TweenMax.to('#barraNavegacion',0.5,{
				"border-bottom-width":"4px"
			})
	)
	.add(TweenMax.from('#sliderPrinciples',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.fromTo($("#arrowBottom"), 1, {css: {left: "-40"}}, {css:{left:getCenterArrowPosition($('#Principles'))}})
	)
	var scene = new ScrollScene({
		triggerElement: "#pantalla5",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	//pantalla6
	var tween=new TimelineMax()
	.add(TweenMax.to('#sliderPrinciples',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.from('#sectionCapabilities',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.to('#arrowBottom',0.5,{left:getCenterArrowPosition($('#Capabilities'))})
	)
	var scene = new ScrollScene({
		triggerElement: "#pantalla6",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();
	//pantalla7
	var tween=new TimelineMax()
	.add(TweenMax.to('#sectionCapabilities',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.from('#sliderServices',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.to('#arrowBottom',0.5,{left:getCenterArrowPosition($('#Services'))+'px'})
	)
	var scene = new ScrollScene({
		triggerElement: "#pantalla7",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	//pantalla8
	var tween=new TimelineMax()
	.add(TweenMax.to('#sliderServices',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.from('#sliderProjects',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.to('#arrowBottom',0.5,{left:getCenterArrowPosition($('#Projects'))+'px'})
	)
	var scene = new ScrollScene({
		triggerElement: "#pantalla8",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	//pantalla9
	var tween=new TimelineMax()
	.add(TweenMax.from('#imagenContacto',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.to('#sliderProjects',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.to('#arrowBottom',0.5,{left:getCenterArrowPosition($('#Contact'))+'px'})
	)
	var scene = new ScrollScene({
		triggerElement: "#pantalla9",
	})
	.setTween(tween)
	.addTo(controller);
	// scene.addIndicators();

	//pantalla10
	var tween=new TimelineMax()
	.add(TweenMax.to('#imagenContacto',0.5,{opacity:1,"display":"block"})
	)
	.add(TweenMax.to('#sliderProjects',0.5,{opacity:0,"display":"none"})
	)
	.add(TweenMax.to('#arrowBottom',0.5,{left:getCenterArrowPosition($('#Contact'))+'px'})
	)
	var scene = new ScrollScene({
		triggerElement: "#pantalla9",
	})
	.setTween(tween)
	.addTo(controller);


		})
	// scene.addIndicators();
	$('#content-wrapper').fullpage({
		sectionSelector:'.pantalla',
		scrollBar:true,
	});

	});
</script>
</div>
@stop
