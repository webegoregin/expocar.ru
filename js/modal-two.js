$(".container-partner__list .partner__item-all").click(function () {
    $(".js-open-cooperations").fadeIn();
    $(".js-open-cooperations").addClass("disabled");
    $("html").addClass("modal-open");
    $(".js-popup-cooperations").fadeIn();
});

$(".js-close").click(function () {
    $(".js-open-cooperations").fadeOut();
    $("html").removeClass("modal-open");
    $(".popup-succesful-all").fadeOut();
});

$(document).mouseup(function (e) {
    var popup = $(".js-popup-cooperations");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-open-cooperations").fadeOut();
        $("html").removeClass("modal-open");
        $(".popup-succesful-all").fadeOut();
    }
});


$(".container-partner__list .partner__item-it").click(function () {
    $(".js-open-cooperations-it").fadeIn();
    $(".js-open-cooperations-it").addClass("disabled");
    $("html").addClass("modal-open");
    $(".js-popup-cooperations-it").fadeIn();
});

$(".js-close").click(function () {
    $(".js-open-cooperations-it").fadeOut();
    $("html").removeClass("modal-open");
    $(".popup-succesful-it").fadeOut();
});

$(document).mouseup(function (e) {
    var popup = $(".js-popup-cooperations-it");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-open-cooperations-it").fadeOut();
        $("html").removeClass("modal-open");
        $(".popup-succesful-it").fadeOut();
    }
});

$(".container-partner__list .partner__item-marketing").click(function () {
    $(".js-open-cooperations-marketing").fadeIn();
    $(".js-open-cooperations-marketing").addClass("disabled");
    $("html").addClass("modal-open");
    $(".js-popup-cooperations-marketing").fadeIn();
});

$(".js-close").click(function () {
    $(".js-open-cooperations-marketing").fadeOut();
    $("html").removeClass("modal-open");
    $(".popup-succesful-marketing").fadeOut();
});

$(document).mouseup(function (e) {
    var popup = $(".js-popup-cooperations-marketing");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-open-cooperations-marketing").fadeOut();
        $("html").removeClass("modal-open");
        $(".popup-succesful-marketing").fadeOut();
    }
});



$(".container-partner__list .partner__item-finance").click(function () {
    $(".js-open-cooperations-finance").fadeIn();
    $(".js-open-cooperations-finance").addClass("disabled");
    $("html").addClass("modal-open");
    $(".js-popup-cooperations-finance").fadeIn();
});

$(".js-close").click(function () {
    $(".js-open-cooperations-finance").fadeOut();
    $("html").removeClass("modal-open");
    $(".popup-succesful-finance").fadeOut();
});

$(document).mouseup(function (e) {
    var popup = $(".js-popup-cooperations-finance");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-open-cooperations-finance").fadeOut();
        $("html").removeClass("modal-open");
        $(".popup-succesful-finance").fadeOut();
    }
});



$(document).ready(function () {

    var $field = $('#cooperations');

    $('.container-partner__list .container-partner__item').on('click', function () {
        var fieldValue;

        fieldValue = $(this).attr('data-value');

        $field.hide(0, function () {
            $field.attr('value', fieldValue);
        });

    });

});

$(document).ready(function ($) {

    $('.btn-services').click(function () {
        setTimeout(function () {
            if ($('form').hasClass('invalid')) {
                $('.message-error').addClass('active');
                $('.btn-two-popup').addClass('active');
                $('.btn-services').addClass('active');
            }
        }, 800);
    });


});

$(document).ready(function ($) {
    document.addEventListener('wpcf7mailsent', function (event) {
        if (event.detail.contactFormId == '276') {
            $(".js-popup-cooperations").fadeOut(400);
            $(".popup-succesful-all").fadeIn(1000);
        }
        if (event.detail.contactFormId == '365') {
            $(".js-popup-cooperations-it").fadeOut(400);
            $(".popup-succesful-it").fadeIn(1000);
        }
        if (event.detail.contactFormId == '368') {
            $(".js-popup-cooperations-marketing").fadeOut(400);
            $(".popup-succesful-marketing").fadeIn(1000);
        }
        if (event.detail.contactFormId == '369') {
            $(".js-popup-cooperations-finance").fadeOut(400);
            $(".popup-succesful-finance").fadeIn(1000);
        }
    }, false);

})




$('#tel').mask("+7 (999) 999-99-99");
$('#tel-it').mask("+7 (999) 999-99-99");
$('#tel-marketing').mask("+7 (999) 999-99-99");
$('#tel-finance').mask("+7 (999) 999-99-99");