<!DOCTYPE html>
<html>
<head>
	<!--    metatags-->
	<meta charset      ="utf-8">
	<meta http-equiv   ="X-UA-Compatible" content="IE=edge">
	<title>Prueba</title>
	<!-- css develop -->
	{{ HTML::style('css/normalize/uncompresed/normalize.css'); }}
	{{ HTML::style('css/bootstrap/uncompresed/bootstrap.css')}}
	{{ HTML::style('css/bootstrap/uncompresed/bootstrap-theme.css')}}

	{{ HTML::style('css/mainStyle/uncompresed/style.css')}}

	<!-- 	css production -->
<!--
<link rel           ="stylesheet" href="css/normalize/minified/normalize.min.css">
<link rel           ="stylesheet" href="css/bootstrap/minified/bootstrap.min.css">
<link rel           ="stylesheet" href="css/bootstrap/minified/bootstrap.min-theme.css">
<link rel           ="stylesheet" href="css/fullPage/minified/jquery.fullPgage.min.css">
<link rel           ="stylesheet" href="css/mainStyle/minified/style.min.css">
-->


<!--iconos-->
<link rel       ="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel       ="apple-touch-icon" href="img/apple-touch-icon-precomposed.png">

<!--    Scripts-->
<!--  js  develop-->
{{ HTML::script('js/_dependencies/jquery/uncompresed/jquery.js')}}
{{ HTML::script('js/_dependencies/modernizr/uncompresed/modernizr.js')}}
{{ HTML::script('js/_dependencies/bootstrap/uncompresed/bootstrap.js')}}
{{ HTML::script('js/_dependencies/tinymce/tinymce.min.js')}}
		<!-- {{ HTML::script('s/_dependencies/fullPage/vendors/jquery.slimscroll.min.js"></script')}}
		{{ HTML::script('s/_dependencies/fullPage/uncompresed/jquery.fullPage.js')}}
		{{ HTML::script('s/mainJs/uncompresed/script.js')}}
		{{ HTML::script('s/mainJs/uncompresed/script2.js')}} -->

		<script type="text/javascript">
			tinymce.init({selector:'textarea'});
		</script>

		<!--   js production-->
		<!--    <script src ="js/_dependencies/jquery/minified/jquery.min.js"></script>-->
		<!--    <script src ="js/_dependencies/greensock/minified/TweenMax.min.js"></script>-->
		<!--    <script src ="js/_dependencies/greensock/minified/ScrollToPlugin.min.js"></script>-->
		<!--    <script src ="js/_dependencies/modernizr/minified/modernizr.min.js"></script>-->
		<!-- <script src    ="js/_dependencies/iscroll-probe/minified/iscroll-probe.min.js"></script> -->
		<!-- <script src    ="js/_dependencies/scrollMagic/minified/jquery.scrollmagic.min.js"></script> -->
		<!-- <script src    ="js/_dependencies/scrollMagic/minified/jquery.scrollmagic.debug.js"></script> -->
		<!-- <script src    ="js/_dependencies/bootstrap/minified/bootstrap.min.js"></script> -->
		<!-- <script src    ="js/_dependencies/fullPage/vendors/jquery.easings.min.js"></script> -->
		<!-- <script src    ="js/_dependencies/fullPage/vendors/jquery.slimscroll.min.js"></script> -->
		<!-- <script src    ="js/_dependencies/fullPage/minified/jquery.fullPage.min.js"></script> -->

	</head>
	<body>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@include('others/navbarInternal')
					@if (Session::has('message'))
					<div class="flash alert">
						<p>{{ Session::get('message') }}</p>
					</div>
					@endif

					@yield('main')

				</div>
			</div>
		</div>

	</body>
	</html>