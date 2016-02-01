@extends('layouts.main')
@section('content')
<div class="basePanel">
    <div id="imagenContacto">

    </div>
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
            <!-- We offer consultancy in operational process optimisation for the oil and gas, mining and construction industry, integrating environmental and safety ca -->
        </div>

    </div>
    <div class="flecha flin"></div>
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
<div id="trigger1"></div>
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
                <p>Contact Us</p>
            </div>
        </div>
    </div>
</section>
</div>
@stop
