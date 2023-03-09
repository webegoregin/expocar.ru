// * =====  Scroll

$("body").on('click', '[href*="#"]', function (e) {
    var fixed_offset = 100;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();

});


// * =====  Header

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


    $('.block-img__absolute').hover(function () {
        if (!$('header').hasClass('active-header')) {
            $("header").removeClass('active');
        }
    })




    $('.container-policy').hover(function () {
        $(".block-submenu").removeClass('active');
        $(".header-list li").removeClass('active');
        $(".submenu li").removeClass('fadeIn');
        $("header").removeClass('active');
    })

    $('header').mouseleave(function () {
        $(".block-submenu").removeClass('active');
    })

    $(function () {
        var location = window.location.href;

        $('.submenu li').each(function () {
            var link = $(this).find('a').attr('href');

            if (location.indexOf(link) !== -1) {
                $(this).addClass('current');
                $('header').addClass('active-header');
                if ($(this).hasClass('current')) {
                    $(this).parents('.header-list__item').addClass('active-menu');
                }
            }
        });
    });

}

if (document.documentElement.clientWidth < 1024) {

    $('.header-list__item').click(function () {
        $("header").removeClass('active');
        $(".block-submenu").removeClass('active');
    });

    $('.menu').click(function () {
        $("header").addClass('active');
        $(".block-submenu").removeClass('active');
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







// * ===== Slider

$('.slider-new-img').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    asNavFor: '.slider-new-nav',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
            }
        }
    ]
});

$('.slider-new-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-new-img',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 430,
            settings: {
                slidesToShow: 2,
                centerMode: false,
            }
        }

    ]
});

$('.slider-asp-img').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    asNavFor: '.slider-asp-nav',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
            }
        }
    ]
});

$('.slider-asp-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-asp-img',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true
    ,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 430,
            settings: {
                slidesToShow: 3,
            }
        }
    ]
});

if (document.documentElement.clientWidth < 1024 & document.documentElement.clientWidth > 576) {
    $('.sliderServices').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,


    });
}

var $carNew = $('#btnCarsNew a');


function addCarNew() {
    $carNew.attr('href', btnLinkNew);
};

var $carAsp = $('#btnCarsAsp a');

function addCarAsp() {
    $carAsp.attr('href', btnLinkAsp);
};

if ($('.slider-new-nav .slick-slide').hasClass("slick-center")) {
    btnLinkNew = $('.slider-new-nav .slick-center div .item').attr('data-href');
    addCarNew();
}

if ($('.slider-asp-nav .slick-slide').hasClass("slick-center")) {
    btnLinkAsp = $('.slider-asp-nav .slick-center div .item').attr('data-href');
    addCarAsp();
}

$('.slick-next').on('click', function () {
    if ($('.slider-new-nav .slick-slide').hasClass("slick-center")) {
        btnLinkNew = $('.slider-new-nav .slick-center div .item').attr('data-href');
        addCarNew();
    }
    if ($('.slider-asp-nav .slick-slide').hasClass("slick-center")) {
        btnLinkAsp = $('.slider-asp-nav .slick-center div .item').attr('data-href');
        addCarAsp();
    }
});

$('.slick-prev').on('click', function () {
    if ($('.slider-new-nav .slick-slide').hasClass("slick-center")) {
        btnLinkNew = $('.slider-new-nav .slick-center div .item').attr('data-href');
        addCarNew();
    }
    if ($('.slider-asp-nav .slick-slide').hasClass("slick-center")) {
        btnLinkAsp = $('.slider-asp-nav .slick-center div .item').attr('data-href');
        addCarAsp();
    }
});





// * ===== Show Btn

$('.show-btn').on('click', function (e) {
    $('.grid_item:nth-child(n+4)').slideToggle('');
    // window.scrollTo(0, window.scrollY - 50)
    setTimeout(function () {
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $('.show-btn').offset().top - fixed_offset }, 1000);
        e.preventDefault();
        $('.show-btn').fadeOut(200);
    }, 100);

});


$('#btnNews').on('click', function () {
    $('.news__item:hidden').slice(0, 3).addClass('flex');
    if ($(".news__item").last().is(':visible')) {
        $('#btnNews').hide();
    }
})




// * ===== Cookies 

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




// * ===== Filter article

$('.submit-search').on("click", function () {
    var value = $('#search').val().toLowerCase();
    $('.article-list .article-list__item').each(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    })

})



$('input[name="tags"]').on('change', function () {
    var category_list = [];
    $('.useful__checkbox :input:checked').each(function () {
        var category = $(this).val();
        category_list.push(category);
    });

    if (category_list.length == 0)
        $('.article-list__item').css({
            display: "flex"
        });
    else {
        $('.article-list__item').each(function () {
            var item = $(this).attr('data-value');
            if (jQuery.inArray(item, category_list) > -1) {
                $(this).css({
                    display: "flex"
                });
            }

            else
                $(this).hide();


        });
    }
});






// * ===== Loader

$('.loader').fadeOut(500);

$('.importance-grid__item .importance-grid__item-number > div').each(function (i, elem) {
    $(elem).text(i + 1);
});


// * ===== Sort Article

function sortUseful(a, b) {
    var date1 = $(a).find(".article-list__item-info .article-list__item-date").text();
    date1 = date1.split('.');
    date1 = new Date(date1[2], date1[1] - 1, date1[0]);
    var date2 = $(b).find(".article-list__item-info .article-list__item-date").text();
    date2 = date2.split('.');
    date2 = new Date(date2[2], date2[1] - 1, date2[0]);

    return date1 < date2 ? 1 : -1;
};


$(document).ready(function () {
    $('#paginated-list .article-list__item').sort(sortUseful).appendTo('#paginated-list');
});


// * ===== Animation work 

$(document).ready(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                $(entry.target).addClass('animationLine');
                $('.container-partner__item:nth-last-child(-n+2)').removeClass('animationLine');

                if(document.documentElement.clientWidth < 576){
                    $('.container-partner__item:nth-last-child(-n+2)').addClass('animationLine');
                    $('.container-partner__item:last-child').removeClass('animationLine');
                }
            } 
        });
    }, { threshold: 0.1 });
    $('.vacancy__list-item-name').each(function () {
        observer.observe(this);
    });
    $('.vacancy__list-item-city').each(function () {
        observer.observe(this);
    });
    $('.container-info-company__item .item-text').each(function () {
        observer.observe(this);
    });
    $('.container-partner__item').each(function () {
        observer.observe(this);
    });
    $('.news__item-info-text').each(function () {
        observer.observe(this);
    });
    $('.article-list__item').each(function () {
        observer.observe(this);
    });
    $('.dealer__title').each(function () {
        observer.observe(this);
    });
     
});


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