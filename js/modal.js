//Modal

$(".open-quality").click(function () {
    $(".js-open-quality").fadeIn();
    $(".js-open-quality").addClass("disabled");
    $("html").addClass("modal-open");
    $(".js-popup-quality").fadeIn();

});

$(".js-close").click(function () {
    $(".js-open-quality").fadeOut();
    $("html").removeClass("modal-open");
    $(".popup-succesful").fadeOut();
});


$(document).mouseup(function (e) {
    var popup = $(".js-popup-quality");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-open-quality").fadeOut();
        $("html").removeClass("modal-open");
        $(".popup-succesful").fadeOut();
    }
});

$(".open-services").click(function () {
    $(".js-open-services").fadeIn();
    $(".js-open-services").addClass("disabled");
    $("html").addClass("modal-open");
    $(".js-popup-services").fadeIn();
});

$(".js-close").click(function () {
    $(".js-open-services").fadeOut();
    $("html").removeClass("modal-open");
    $(".popup-succesful").fadeOut();
});


$(document).mouseup(function (e) {
    var popup = $(".js-popup-services");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-open-services").fadeOut();
        $("html").removeClass("modal-open");
        $(".popup-succesful").fadeOut();
    }
});

function sortCity(a, b) {
    return ($(b).text().toUpperCase()) <
        ($(a).text().toUpperCase()) ? 1 : -1;
}



$("#City label").sort(sortCity).appendTo('#City');
$('#City').append('<label><input type="radio" class="radio" value="all" name="city"/>Другое</label>');

var selectedDealer2 = document.querySelector("#cityForm");
var optionsContainerDealer2 = document.querySelector("#City");


selectedDealer2.addEventListener("click", () => {
    optionsContainerDealer2.classList.toggle("active");
});

$('#cityForm').click(function () {
    $('#Brand').removeClass("active");
})
$('.list-dealers__item').show();
$('input[name="city"]').change(function () {
    var text = $('input[name="city"]:checked').closest('label').text();

    $("#cityForm").text(text);
    $('#City').removeClass("active");

})



$("#Brand label").sort(sortCity).appendTo('#Brand');
$('#Brand').append('<label><input type="radio" class="radio" value="list-dealers__item" name="brand"/>Другое</label>');


var selectedBrand = document.querySelector("#brandForm");
var optionsContainerBrand = document.querySelector("#Brand");

selectedBrand.addEventListener("click", () => {
    optionsContainerBrand.classList.toggle("active");
});

$('#brandForm').click(function () {
    $('#City').removeClass("active");
})
$('.list-dealer__item').show();
$('input[name="brand"]').change(function () {
    var text = $('input[name="brand"]:checked').closest('label').text();
    $("#brandForm").text(text);
    $('#Brand').removeClass("active");
})

$(document).ready(function () {
    $("#City label .radio").change(function () {
        switch ($(this).val()) {
            case 'kazan':
                $("#Brand").html("<label><input type='radio' class='radio' value='Chery' name='brand'>Chery</label>");
                break;
            case 'volgograd':
                $("#Brand").html("<label><input type='radio' class='radio' value='Chery' name='brand'>Chery</label>");
                break;
            case 'krasnodar':
                $("#Brand").html("<label><input type='radio' class='radio' value='Chery' name='brand'>Chery</label>");
                break;
            case 'moscow':
                $("#Brand").html("<label><input type='radio' class='radio' value='Chery' name='brand'>Chery</label><label><input type='radio' class='radio' value='Skywell' name='brand'>Skywell</label><label><input type='radio' class='radio' value='Omoda' name='brand'>Omoda</label><label><input type='radio' class='radio' value='FAW' name='brand'>Faw</label>");
                break;
            case 'nizhny-novgorod':
                $("#Brand").html("<label><input type='radio' class='radio' value='Chery' name='brand'>Chery</label><label><input type='radio' class='radio' value='Exeed' name='brand'>Exeed</label>");
                break;
            case 'saint-petersburg':
                $("#Brand").html("<label><input type='radio' class='radio' value='Gac' name='brand'>Gac</label>");
                break;
            case 'novosibirsk':
                $("#Brand").html("<label><input type='radio' class='radio' value='Chery' name='brand'>Chery</label>");
                break;
            default:
                $("#Brand").html("");
        }

        $('#Brand').append('<label><input type="radio" class="radio" value="list-dealers__item" name="brand"/>Другое</label>');
        $('input[name="brand"]').change(function () {
            var text = $('input[name="brand"]:checked').closest('label').text();
            $("#brandForm").text(text);
            $('#Brand').removeClass("active");
        })
    });
});

//Передача значений в CF7

$(document).ready(function ($) {


    $('.input-name').change(function () {
        $('#name-popup').val($(this).val());
        
    });

    $('.input-tel').change(function () {
        $('#phone-popup').val($(this).val());
    });

    $('#City').change(function () {
        var text = $('#cityForm').text()
        $('#city-popup').val(text)
    });

    $('#Brand').change(function () {
        var text = $('#brandForm').text()
        $('#brand-popup').val(text)
    });
 
})



$(document).ready(function ($) {


$('.btn-services').click(function()   {
    setTimeout(function () {if ($('form').hasClass('invalid')) {
        $('.message-error').addClass('active');
        $('.btn-two-popup').addClass('active');
        $('.btn-services').addClass('active');
    }}, 800);
});
  
    
});


$(document).ready(function ($) {
    document.addEventListener('wpcf7mailsent', function (event) {
        if (event.detail.contactFormId == '293') {
            $(".js-popup-quality").fadeOut(400);
            $(".popup-succesful").fadeIn(1000);
        }
        if (event.detail.contactFormId == '277') {
            $(".js-popup-services").fadeOut(400);
            $(".popup-succesful").fadeIn(1000);
        }
    }, false);

})



//Mask
$('#tel').mask("+7 (999) 999-99-99");
$('.tel').mask("+7 (999) 999-99-99");

