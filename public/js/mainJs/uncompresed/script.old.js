        var controller;
        if (Modernizr.touch) {
          var myScroll;
          
          $(document).ready(function () {

            // wrap for iscroll
            $("#content-wrapper")
            .addClass("scrollContainer")
            .wrapInner('<div class="scrollContent"></div>');

            // add iScroll
            myScroll = new IScroll('#content-wrapper', {scrollX: false, scrollY: true, scrollbars: true, useTransform: false, useTransition: false, probeType: 3, click: true});
            // update container on scroll
            myScroll.on("scroll", function () {
              controller.update();
            });
          // overwrite scroll position calculation to use child's offset instead of parents scrollTop();
          controller.scrollPos(function () {
            return -myScroll.y;
          });
          // refresh height, so all is included.
          setTimeout(function () {
            myScroll.refresh();
          }, 0);

          // manual set hight (so height 100% is available within scroll container)
          $(document).on("orientationchange", function () {
            $("section")
            .css("min-height", $(window).height())
            .parent(".scrollmagic-pin-spacer").css("min-height", $(window).height());
          });
            $(document).trigger("orientationchange"); // trigger to init
          });
          // init the controller
          controller = new ScrollMagic({
            container: "#content-wrapper",
            globalSceneOptions: {
              triggerHook: "onLeave"
            }
          });
          }
           else {
          // init the controller
          // 
          // 
          jQuery(document).ready(function($) {
            $('#content-wrapper').fullpage({
              sectionSelector: '.seccionSelected, .pantalla',
              navigation: true,
              verticalCentered:true,
              navigationTooltips:['Home','Logo','Who We Are','Transition','Menu','Principles','Capabilities','Services','Projects','Contact Us'],
              scrollBar:true,
              'resize': false,
              css3: false,
              normalScrollElements:'.normalScroll',
              continuousVertical:true
            });
          });
            controller = new ScrollMagic({
              loglevel:2,
              globalSceneOptions: {
                triggerHook: "onLeave"
              }
            });
          }
