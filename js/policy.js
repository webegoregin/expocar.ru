
if (document.documentElement.clientWidth > 1024) {

    $('.header-list__item').hover(function () {
        $(".block-submenu").removeClass('active');
    });

    $('.menu').hover(function () {
        $("header").addClass('active');
        $(".block-submenu").addClass('active');
        $('.submenu li').addClass('fadeOut');
        $('.submenu li').removeClass('fadeIn');
        $('.submenu').addClass('submenu2');
    });

    $('.header-list li').hover(function () {
        $(this).toggleClass('active').siblings().removeClass('active');
        $('header').addClass('active')
        if ($('.header-list li').hasClass('active')) {
            $('.submenu li').addClass('fadeIn');
            $('.submenu li').removeClass('fadeOut');
            $('.submenu').removeClass('submenu2');
        }

    });

    $('.block-submenu').hover(function () {
        $(".block-submenu").removeClass('active');
    })


    $('.container-policy').hover(function () {
        $(".block-submenu").removeClass('active');
        $(".header-list li").removeClass('active');
        $(".submenu li").removeClass('fadeIn');

    })
}

if (document.documentElement.clientWidth < 1024) {

    $('.header-list__item').click(function () {
        $(".block-submenu").removeClass('active');
    });

    $('.menu').click(function () {
        $(".block-submenu").addClass('active');
        $('.submenu li').addClass('fadeOut');
        $('.submenu li').removeClass('fadeIn');
        $('.submenu').addClass('submenu2');
    });

    $('.header-list li').click(function () {
        $(this).toggleClass('active').siblings().removeClass('active');

        if ($('.header-list li').hasClass('active')) {
            $('.submenu li').addClass('fadeIn');
            $('.submenu li').removeClass('fadeOut');
            $('.submenu').removeClass('submenu2');
        }

    });
    $('.submenu li a').click(function () {
        $(".btn-burger").removeClass('close-burger');
        $('body').removeClass('active');
        $('.header-list').removeClass('active')
    })

    $('.btn-burger').on('click', function (event) {
        $(this).toggleClass('close-burger');
        $('header').removeClass('background');
        $('html').toggleClass('active');
        $('.container-header').toggleClass('visible');
        $('header').toggleClass('active');

        $('.header-list').toggleClass('active')
        if ($('.header-list li').hasClass('active')) {
            $('.submenu li').removeClass('fadeOut');
            $('.submenu').removeClass('submenu2');
            $(".header-list li").removeClass('active');
        }

    });
}


$('.submenu').mouseleave(function () {
    $("header").removeClass('active');
})



$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $("header").addClass("scroll-active");
        $("header").addClass("background");
        $("header").removeClass("hidden");
        $(".block-submenu").addClass("scroll-active");
    } else if (scroll >= 1) {
        $("header").addClass("hidden");
        $(".block-submenu").addClass("hidden");
    } else {
        $("header").removeClass("background");
        $("header").removeClass("scroll-active");
        $("header").removeClass("hidden");
        $(".block-submenu").removeClass("scroll-active");
        $(".block-submenu").removeClass("hidden");
    }
});

$('.loader').fadeOut(500); 


$(document).ready(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                $(entry.target).addClass('animationLineFooter');


            }
        });
    }, { threshold: 0.1 });
    $('footer').each(function () {
        observer.observe(this);
    });

});

/*Cookies */

const cookieEl = document.querySelector('.cookies-block');
const okEl = document.querySelector('.cookies__btn');

okEl.addEventListener('click', () => {
    cookieEl.style.display = 'none';
});

let cookies = () => {
    if (!Cookies.get('hide-cookie')) {
        setTimeout(() => {
            cookieEl.style.display = 'flex';
        }, 1000);
    }

    Cookies.set('hide-cookie', 'true', {
        expires: 30
    });
}

$('header').addClass('active');
// cookies();