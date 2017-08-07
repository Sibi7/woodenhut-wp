$(document).ready(function(){

    /*header-top mobile menu*/
    /*var pull = $('#header-menu');
    var menu = $('.nav-top');
    var menuHeight = menu.height();

    $(pull).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function () {
        var w = $(window).width();
        if (w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });*/
    /*header-top mobile menu*/

    /*menu scroll*/
    $(document).on('click', '.smoothScroll', function (event) {/*функция прокрутки на блок страницы при клике по элементам меню */
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    /*close menu scroll*/

    /*show Go_Top arrow*/
    $(document).on('click', '#Go_Top', function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    /*close Go_Top arrow*/

    /*catalog map*/
    /*if ($('#map').length > 0) {//проверяет наличие блока на странице

        ymaps.ready(function () {

            var myMap = new ymaps.Map('map', {
                    center: [52.318719, 8.348224],
                    zoom: 15
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'Собственный значок метки',
                    balloonContent: 'Это красивая метка'
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: 'images/myIcon.gif',
                    // Размеры метки.
                    iconImageSize: [30, 42],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-3, -42]
                });

            myMap.geoObjects.add(myPlacemark);            
        });
    };*/
    /*close catalog map*/

});

/*fadeIn Go-Top arrow*/
$(window).scroll(function(){

    var scrollDiv = $('#Go_Top');
    $(this).hide().removeAttr("href");
    if ($(window).scrollTop() >= "250") {
        $(this).fadeIn("slow")
    }
    if ($(window).scrollTop() <= "250") {
        $(scrollDiv).fadeOut("slow")
    } else {
        $(scrollDiv).fadeIn("slow")
    }

});
/*close fadeIn Go-Top arrow*/

/*open bilder slider*/
$(window).load(function () {
    
    $('.bilder__slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1600:{
                items:5
            }
        }
    });
});
/*close bilder slider*/