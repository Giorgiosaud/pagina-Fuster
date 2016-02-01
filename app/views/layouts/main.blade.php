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
    <div id="loadingScreen">
        <div class="svgImage">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="450px" height="200px" viewBox="0 0 450 200" enable-background="new 0 0 450 200" xml:space="preserve">
                <polygon class="svgLogo" points="123.676,144.607 103.109,144.607 103.109,158.782 117.683,158.782 117.683,167.145 103.109,167.145 103.109,195.241 94.207,195.241 94.207,136.24 123.676,136.24 "/>
                <g>
                    <g>
                        <path class="svgLogo" d="M142.887,136.24v35.506c0,5.063,0.834,8.763,2.49,11.098c2.468,3.403,5.937,5.092,10.426,5.092 c4.494,0,8.006-1.688,10.465-5.092c1.646-2.26,2.488-5.957,2.488-11.098V136.24h8.899v37.977c0,6.204-1.93,11.326-5.809,15.368 c-4.348,4.465-9.701,6.701-16.043,6.701s-11.669-2.236-16.023-6.701c-3.85-4.042-5.788-9.164-5.788-15.368V136.24H142.887z"/>
                    </g>
                    <g>
                        <path class="svgLogo" d="M225.139,144.988l-7.221,4.277c-1.343-2.33-2.636-3.866-3.867-4.573 c-1.266-0.824-2.915-1.227-4.926-1.227c-2.457,0-4.501,0.704-6.14,2.094c-1.631,1.383-2.457,3.125-2.457,5.207 c0,2.865,2.148,5.191,6.428,6.961l5.89,2.409c4.777,1.936,8.279,4.288,10.501,7.1c2.208,2.787,3.329,6.2,3.329,10.252 c0,5.427-1.818,9.927-5.424,13.453c-3.646,3.576-8.168,5.345-13.564,5.345c-5.133,0-9.352-1.496-12.691-4.564 c-3.288-3.04-5.338-7.301-6.152-12.801l9.025-1.991c0.394,3.465,1.117,5.85,2.134,7.19c1.841,2.529,4.516,3.814,8.018,3.814 c2.787,0,5.069-0.931,6.918-2.793c1.826-1.846,2.758-4.213,2.758-7.062c0-1.143-0.17-2.178-0.483-3.14 c-0.32-0.959-0.801-1.826-1.497-2.628c-0.673-0.812-1.554-1.56-2.627-2.273c-1.052-0.693-2.339-1.354-3.8-2.002l-5.697-2.354 c-8.076-3.418-12.109-8.41-12.109-14.965c0-4.438,1.693-8.135,5.074-11.111c3.388-3.011,7.609-4.507,12.647-4.507 C215.998,135.099,221.309,138.4,225.139,144.988"/>
                    </g>
                    <g>
                        <polygon class="svgLogo" points="254.801,144.607 254.801,195.241 245.876,195.241 245.876,144.607 232.318,144.607 232.318,136.24 268.306,136.24 268.306,144.607 "/>
                    </g>
                    <g>
                        <polygon class="svgLogo" points="308.804,144.607 285.165,144.607 285.165,158.782 302.839,158.782 302.839,167.145 285.165,167.145 285.165,186.864 308.804,186.864 308.804,195.241 276.268,195.241 276.268,136.24 308.804,136.24 "/>
                    </g>
                    <g>
                        <path class="svgLogo" d="M340.483,170.08l18.25,25.161h-10.888l-16.835-24.156h-1.625v24.156h-8.887V136.24h10.426 c7.792,0,13.427,1.478,16.896,4.396c3.812,3.24,5.724,7.556,5.724,12.9c0,4.19-1.202,7.773-3.59,10.78 C347.563,167.339,344.395,169.258,340.483,170.08 M329.386,163.33h2.83c8.446,0,12.64-3.229,12.64-9.67 c0-6.032-4.087-9.053-12.296-9.053h-3.174V163.33z"/>
                    </g>
                    <g>
                        <polygon class="svgLogo" points="241.133,85.677 179.936,39.719 118.274,84.999 90.795,64.352 90.795,88.655 118.274,109.297 179.936,64.021 241.044,109.9 241.044,110.044 259.504,96.479 259.504,72.19 241.133,85.694 			"/>
                    </g>
                    <g>
                        <polygon class="svgLogo" points="338.507,85.75 229.445,3.398 229.445,3.393 229.412,3.356 229.412,3.411 198.319,26.242 214.684,38.527 229.42,27.7 229.42,27.673 338.507,110.043 356.878,96.571 356.878,72.283 			"/>
                    </g>
                </g>


</svg>
        </div>
    </div>
    <div id="example-wrapper" class="scrollContainer">
        @yield('content')
    </div>
</div>
<script>
    $(window).load(function (){
        $('#loadingScreen').delay(2000).fadeOut('slow');
    });

</script>
</body>
