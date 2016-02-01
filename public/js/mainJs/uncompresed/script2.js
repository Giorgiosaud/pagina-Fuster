function resizeSliders(element) {
    element.width($('.pantalla').width());
    tamano = element.children('.contenido').children('.elemento').size();
    element.children('.contenido').width($('.pantalla').width() * tamano);
}
function getCenterArrowPosition(element) {
    return element.offset().left + (element.width() / 2) - 20;
}
function initializeInhome() {
    window.position = $('#pantalla1');
    $('html,body').animate({scrollTop: 0}, 1000);
    window.position.nextAll().closest('.pantalla').first().addClass('next');
    if (window.position = !(window.position = $('#pantalla1'))) {
        $('.next').removeClass('next');
        $('.last').removeClass('last');
        window.position.nextAll().closest('.pantalla').first().addClass('next');
        window.position.prevAll().closest('.pantalla').last().addClass('last');
    }
}
function logoSize() {
    $('.logoFuster').height($('.logoF').height() / (8 / 20));
    lef = ($('.logoF').width() - $('.logoTopF').width());
    $('.logoTopF').css({
        'left': lef
    })
}
$(document).on('click', '.contactButton', function (event) {
    event.preventDefault();
    $this = $(this);
    $this.parent().parent().animate({height: "100%", marginTop: "0"}, 1000);
    $.get('index.php/formulario', function (data) {
        $this.parent().html(data);
        $('.tituloFormulario').css({
            "padding-top": $('#barraNavegacion').outerHeight() + 10
        });
    });
});
jQuery(window).resize(function (event) {
    logoSize();
    var altura = $(window).height(),
        centro = (altura / 2) - ($('.logoF').height() / 2 + $('.logoFuster').height() / 2) / 2;
    $('.pantalla,.basePanel').height(altura);
    $.each($('.slider'), function () {
        resizeSliders($(this));
    });
    $('.elemento,.indicadores').width($('.pantalla').width());
    $('.elemento,.indicadores').height($('.slider').height());
});
$(document).on('click', '.enviarFormulario', function (event) {
    event.preventDefault();

    console.log($('#contactanos').serialize());
    $.post( "sendMail", $( "#contactanos" ).serialize(), function (data) {
        $('.enviarFormulario').parent().parent().parent().parent().parent().parent().parent().parent().animate({
            height: "50%",
            marginTop: "12.5%"
        }, 1000);
        $('.enviarFormulario').parent().parent().parent().parent().parent().parent().parent().html('<div class="tituloSlide tituloProjects"><div class="titulo">Thanks</div></div><div class="contentSlide text-left"><p style="text-align: left;">'+data+'</p></div>');

    }, 'text' );


});
$(document).on('click', '.carousel-control', function (event) {
    event.preventDefault();
    $this = $(this);
    contenido = $this.siblings('.contenido');
    cantidadDeElementos = contenido.children('.elemento').size();
    contenidoMargen = $('.pantalla').width() - parseInt(contenido.css('margin-left'));
    diapositivaActual = Math.floor((contenidoMargen / $('.pantalla').width()));
    pxDiapositivaSiguiente = (diapositivaActual + 1) * $('.pantalla').width();
    if ($this.hasClass('right')) {
        if (diapositivaActual == 1) {
            $this.siblings('.left').fadeIn('slow');
            $this.siblings('.contenido').animate({"margin-left": "-" + $('.pantalla').width()}, 1000);
        }
        else {
            $this.siblings('.contenido').animate({"margin-left": "-" + $('.pantalla').width() * (diapositivaActual)}, 1000);
            if (diapositivaActual == (cantidadDeElementos - 1)) {
                $this.fadeOut('slow');
            }
        }
    }
    else if ($this.hasClass('left')) {
        if (diapositivaActual == 1) {
            console.log('estas en la primera');
        }
        else if (diapositivaActual == 2) {
            $this.siblings('.contenido').animate({"margin-left": "0"}, 1000);
            $this.fadeOut('slow');
        }
        else if (diapositivaActual == cantidadDeElementos) {
            $this.siblings('.contenido').animate({"margin-left": "-" + $('.pantalla').width() * (diapositivaActual - 2)}, 1000);
            $this.siblings('.right').fadeIn('slow');
        }
        else {
            $this.siblings('.contenido').animate({"margin-left": "-" + $('.pantalla').width() * (diapositivaActual - 2)}, 1000);
        }
    }
});
$(document).on('click', '.tituloDeServicio', function (event) {
    event.preventDefault();
    $this = $(this);
    left = $('#sliderServices').children('.contenido').children('.' + $this.data('referencia')).offset().left;
    $this.closest('.contenido').animate({"margin-left": "-=" + left}, 1000);
    $this.closest('.contenido').siblings('.right,.left').fadeIn('.slow');

});
jQuery(document).ready(function ($) {

    logoSize();
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top + 1
                }, 1000);
                return false;
            }
        }
    });

    var altura = $(window).height(),
        centro = (altura / 2) - ($('.logoF').height() / 2 + $('.logoFuster').height() / 2) / 2;
    $('.pantalla,.basePanel').height(altura);


    $.each($('.slider'), function () {
        resizeSliders($(this));
        if ($(this).hasClass('showLeft')) {
            $(this).children('.left').fadeIn('fast');
        }
        if ($(this).hasClass('showRight')) {
            $(this).children('.right').fadeIn('fast');
        }
    });
    $('.elemento,.indicadores').width($('.pantalla').width());
    $('.elemento,.indicadores').height($('.slider').height());
    altura = $(window).height();
});
