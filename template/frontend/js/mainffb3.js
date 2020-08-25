$(document).ready(function () {
    // active wow animation
    if ($('.wow').length) {
        wow = new WOW({
            boxClass: 'wow',
            offset: 0,
            live: true
        });
        wow.init();
    }

    var userAgent, ieReg, ie;
    userAgent = window.navigator.userAgent;
    ieReg = /msie|Trident.*rv[ :]*11\./gi;
    ie = ieReg.test(userAgent);

    if (ie) {
        $('body').addClass('ie');
    }
    let isIOS = (/iPad|iPhone|iPod/.test(navigator.platform) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)) && !window.MSStream;
    if (isIOS) {
        $('body *').each(function () {
            if ($(this).hasClass('has-bg-src')) {
                if ($(this).attr('data-bg-src') != 0) {
                    $(this).css('background-attachment', 'scroll');
                }
            }
        });
    }
    // start slide testi
    if ($('.sec-testi .slider').length) {
        $('.sec-testi .slider').slick({
            autoplay: true,
            pauseOnHover: false,
            pauseOnFocus: false,
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToScroll: 1,
            slidesToShow: 2,
            responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            ]
        });
    }

    // Srcoll top
    $(".scroll-top .btn").click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000)
    });

    $('.page-product .tab-product .tab-content .body .btn-more').click(function () {
        $(this).parents('.body').find('.page-detail-body').addClass('more');
        $(this).addClass('d-none');
        $(this).parent().find('.btn-less').removeClass('d-none');
    });
    $('.page-product .tab-product .tab-content .body .btn-less').click(function () {
        $(this).parents('.body').find('.page-detail-body').removeClass('more');
        $(this).addClass('d-none');
        $(this).parent().find('.btn-more').removeClass('d-none');
    });

    if ($(window).width() >= 768) {
        if ($('.rd-parallax').length) {
            $('.rd-parallax').RDParallax({});
        }
    }

    setMenuBehavior();
    // activeSetHeightFromWidth();
});

$(window).resize(function () {
    // activeSetHeightFromWidth();
});

$(window).scroll(function () {
    scrollPage();
});


function scrollPage() {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $(".scroll-top .btn").addClass('d-block');
        $('.header').addClass('scroll');
    } else {
        $(".scroll-top .btn").removeClass('d-block');
        $('.header').removeClass('scroll');
    }
}

// // set height from width
// function setHeightFromWidth(wrapImg, x, y) {
//     wrapImg.height(wrapImg.width() / x * y);
// }

// // set each height from width
// function setEachHeightFromWidth(wrapImg, x, y) {
//     wrapImg.each(function(){
//         $(this).height($(this).width() / x * y);
//     })
// }

// function activeSetHeightFromWidth() {
//     setTimeout(function() {

//         // setEachHeightFromWidth($('.sec-news .wrap-img-cover'), 3, 2);
//         // setEachHeightFromWidth($('.page-news .news .wrap-img-cover'), 3, 2);
//         // setEachHeightFromWidth($('.page-news-detail .hot-news .wrap-img-cover'), 3, 2);
//         // setHeightFromWidth($('.sec-gallery .tab-content .wrap-img-cover'), 3, 2);
//         // setEachHeightFromWidth($('.project .wrap-img-cover'), 3, 2);
//         // setHeightFromWidth($('.sec-video .wrap-img-cover'), 16, 9);

//         // if($(window).width() >= 768) {
//         //     setHeightFromWidth($('.home-slide-img .slider .wrap-img-cover'), 192, 80);
//         // }
//     }, 500);
// }

function setMenuBehavior() {
    $('.header .navbar-toggle').click(function () {
        if ($('.header-mobile .collapse.in').length) {
            $('body').removeClass('overflow-hidden');
            $('.header .overlay').removeClass('d-block');
            $('.header .navbar-toggle').removeClass('close');

        } else {
            $('body').addClass('overflow-hidden');
            $('.header .overlay').addClass('d-block');
            $('.header .navbar-toggle').addClass('close');
        }
    });
    $('.header .overlay').click(function () {
        $('body').removeClass('overflow-hidden');
        $('.header .overlay').removeClass('d-block');
        $('.header .navbar-toggle').removeClass('close');
    });
}

//set mobile header
function setMobileHeader() {
    if ($(window).width() < 1200) {
        $('.header').addClass('header-mobile');
        $('.header').removeClass('header-desktop');
    } else {
        $('.header').removeClass('header-mobile');
        $('.header').addClass('header-desktop');
    }
}

//set mobile overlay
function setMobileheaderOverlay() {
    if ($('.header-mobile').length) {
        var headerHeight = $('.header-mobile .navbar-header').height();
        $('.header-mobile .overlay').css('top', headerHeight);
        $('.header-mobile .navbar-collapse').css('top', headerHeight);
        $('.header-mobile .navbar .navbar-collapse').height($(window).height() - headerHeight);
    } else {
        $('.header .overlay').css('top', '0');
        $('.header .navbar-collapse').css('top', '0');
        $('.header .navbar .navbar-collapse').height('auto !important');
    }
}


// set background image
$('body *').each(function () {
    if ($(this).hasClass('has-bg-src')) {
        if ($(this).attr('data-bg-src') != 0) {
            $(this).css('background-image', 'url(' + $(this).attr('data-bg-src') + ')');
        }
    }
});

// video youtube
function isYoutubeVideo(iframe) {
    iframe.each(function (index, ele) {
        var isYoutubeSrc = $(ele).attr('src').indexOf('https://www.youtube.com');
        if (isYoutubeSrc >= 0) {
            if (($(window).width() < 768) && ($(window).width() > $(window).height())) {
                $(ele).height($(window).height() - 70)
            } else {
                $(ele).height($(ele).width() / 16 * 9);
            }
            $(window).resize(function () {
                if (($(window).width() < 768) && ($(window).width() > $(window).height())) {
                    $(ele).height($(window).height() - 70)
                } else {
                    $(ele).height($(ele).width() / 16 * 9);
                }
            });
        }
    });
}
$(document).ready(function () {
    isYoutubeVideo($('.page-detail-body iframe'));
})

//click an element, scroll to another element
$('.home-slide-img .item .arrow-down').click(function () {
    $('body,html').animate({
        scrollTop: $('#about').offset().top - 59
    }, 500)
});

// ie brower
// function setBgCover(){
//     $('.ie .project-list .wrap-img-cover').each(function(){
//         if ($(window).width() > 767) {
//             $(this).css('background-image', 'url(' + $(this).find('img').attr('src') + ')');
//             $(this).addClass('bg-cover');
//         }
//         else {
//             $(this).css('background-image', 'url()');
//             $(this).removeClass('bg-cover');
//         }
//     })
// }