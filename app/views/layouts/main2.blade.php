<!DOCTYPE html>
<html>
<head>
    <!--    metatags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fuster Pl</title>
    <meta name="description"
          content="FUSTER IS A GROUP OF DEVELOPMENT PROFESSIONALS WITH EXPERIENCE IN THE RESOURCES INDUSTRY.">
    <meta name="keywords" content="industry, fuster, development, professionals, experience">
    <meta name="robots" content="index, nofollow">
    <meta name="copyright" content="Fusterpl. Ltd">
    <meta name="language" content="english">
    <meta name="web_author" content="Zonapro.net">
    <!-- css develop -->
    {{ HTML::style('css/normalize/uncompresed/normalize.css')}}
    {{ HTML::style('css/bootstrap/uncompresed/bootstrap.css')}}
    {{ HTML::style('css/bootstrap/uncompresed/bootstrap-theme.css')}}

    {{ HTML::style('css/fullPage/uncompresed/jquery.fullPage.css')}}
    {{ HTML::style('css/mainStyle/uncompresed/style.css')}}

    <!-- 	css production

	{{ HTML::style('css/normalize/minified/normalize.min.css')}}
	{{ HTML::style('css/bootstrap/minified/bootstrap.min.css')}}
	{{ HTML::style('css/bootstrap/minified/bootstrap-theme.min.css')}}
	<!-- {{ HTML::style('css/fullPage/minified/jquery.fullPage.min.css')}}
	{{ HTML::style('css/mainStyle/minified/style.min.css')}}-->


    <!--iconos-->
    <link rel="shortcut icon" href="img/icon/ios/icon.png" type="image/x-icon">
    {{--<link rel       ="apple-touch-icon" href="img/apple-touch-icon-precomposed.png">--}}
    <link rel="apple-touch-icon" href="img/icon/ios/AppIcon.appiconset/Icon-60@2x.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/ios/AppIcon.appiconset/Icon-60@3x.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon/ios/AppIcon.appiconset/Icon-76.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon/ios/AppIcon.appiconset/Icon-76@2x.png"/>
    <link rel="apple-touch-icon" sizes="58x58" href="img/icon/ios/AppIcon.appiconset/Icon-Small@2x.png"/>
    <!--    Scripts-->

    <!--   js production -->
    <!--

	{{ HTML::script('js/_dependencies/jquery/minified/jquery.min.js')}}
	{{ HTML::script('js/_dependencies/greensock/minified/TweenMax.min.js')}}
	{{ HTML::script('js/_dependencies/greensock/minified/ScrollToPlugin.min.js')}}
	{{ HTML::script('js/_dependencies/modernizr/minified/modernizr.min.js')}}

	{{ HTML::script('js/_dependencies/iscroll-probe/minified/iscroll-probe.min.js')}} -->
    <!-- {{ HTML::script('js/_dependencies/scrollMagic/minified/jquery.scrollmagic.min.js')}}
	{{ HTML::script('js/_dependencies/scrollMagic/minified/jquery.scrollmagic.debug.js')}}
	{{ HTML::script('js/_dependencies/svgJquery/jquery.svg.min.js')}}

	{{ HTML::script('js/_dependencies/bootstrap/minified/bootstrap.min.js')}}

	{{ HTML::script('js/_dependencies/fullPage/vendors/jquery.easings.min.js')}}

	{{ HTML::script('js/_dependencies/fullPage/vendors/jquery.slimscroll.min.js')}}
	{{ HTML::script('js/_dependencies/fullPage/minified/jquery.fullPage.min.js')}}

	{{ HTML::script('js/mainJs/minified/script.min.js')}}
	{{ HTML::script('js/mainJs/minified/script2.min.js')}} -->
    <!--  js  develop-->


    {{ HTML::script('js/_dependencies/jquery/uncompresed/jquery.js')}}
    {{ HTML::script('js/_dependencies/greensock/uncompresed/TweenMax.js')}}
    {{ HTML::script('js/_dependencies/greensock/uncompresed/ScrollToPlugin.js')}}
    {{ HTML::script('js/_dependencies/modernizr/uncompresed/modernizr.js')}}
    {{ HTML::script('js/_dependencies/iscroll-probe/uncompresed/iscroll-probe.js')}}
    {{ HTML::script('js/_dependencies/scrollMagic/uncompresed/jquery.scrollmagic.js')}}
    {{ HTML::script('js/_dependencies/scrollMagic/minified/jquery.scrollmagic.debug.js')}}
    {{ HTML::script('js/_dependencies/bootstrap/uncompresed/bootstrap.js')}}
    <!-- {{ HTML::script('js/_dependencies/fullPage/vendors/jquery.easings.min.js')}} -->

    {{ HTML::script('js/_dependencies/fullPage/uncompresed/jquery.fullPage.js')}}
    {{ HTML::script('js/_dependencies/fullPage/vendors/jquery.slimscroll.min.js')}}
    {{ HTML::script('js/mainJs/uncompresed/script.js')}}
    {{ HTML::script('js/mainJs/uncompresed/script2.js')}}
    <script>
        $(document).ready(function ($) {
            var controller = new ScrollMagic({
                container: "#example-wrapper",
                globalSceneOptions: {
                    triggerHook: "onLeave"
                }
            });
        });
        if (Modernizr.touch) {
            // configure iScroll
            var myScroll = new IScroll('#example-wrapper', {
                // don't scroll horizontal
                scrollX: false,
                // but do scroll vertical
                scrollY: true,
                // show scrollbars
                scrollbars: true,
                // deactivating -webkit-transform because pin wouldn't work because of a webkit bug: https://code.google.com/p/chromium/issues/detail?id=20574
                // if you dont use pinning, keep "useTransform" set to true, as it is far better in terms of performance.
                useTransform: false,
                // deativate css-transition to force requestAnimationFrame (implicit with probeType 3)
                useTransition: false,
                // set to highest probing level to get scroll events even during momentum and bounce
                // requires inclusion of iscroll-probe.js
                probeType: 3,
                // pass through clicks inside scroll container
                click: true
            });
            controller.scrollPos(function () {
                return -myScroll.y;
            });
            // thanks to iScroll 5 we now have a real onScroll event (with some performance drawbacks)
            myScroll.on("scroll", function () {
                controller.update();
            });
        }
    </script>


</head>
<body>
<div id="content-wrapper">

    <div id="example-wrapper" class="scrollContainer">
        @yield('content')
    </div>
</div>

</body>
