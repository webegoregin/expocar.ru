
function sortCity(a, b) {
    return ($(b).text().toUpperCase()) <
        ($(a).text().toUpperCase()) ? 1 : -1;
}


$("#optionCity label").sort(sortCity).appendTo('#optionCity');
$('#optionCity').append('<label><input type="radio" class="radio" value="list-dealers__item" name="city"/>Все города</label>');

var selectedDealer = document.querySelector("#city");
var optionsContainerDealer = document.querySelector("#optionCity");


selectedDealer.addEventListener("click", () => {
    optionsContainerDealer.classList.toggle("active");
});

$('#city').click(function () {
    $('#optionBrand').removeClass("active");
})
$('.list-dealers__item').show();
$('input[name="city"]').change(function () {
    var text = $('input[name="city"]:checked').closest('label').text();

    $("#city").text(text);
    $('#optionCity').removeClass("active");

    var target = $('.' + $(this).attr('value'));
    $(".list-dealers__item").not(target).hide();
    target.fadeIn(500);

})



$("#optionBrand label").sort(sortCity).appendTo('#optionBrand');
$('#optionBrand').append('<label><input type="radio" class="radio" value="list-dealers__item" name="brand"/>Все марки</label>');

$('#brand').click(function () {
    $('#optionCity').removeClass("active");
})
var selectedBrand = document.querySelector("#brand");
var optionsContainerBrand = document.querySelector("#optionBrand");

var optionsListDealer2 = document.querySelectorAll("label");

selectedBrand.addEventListener("click", () => {
    optionsContainerBrand.classList.toggle("active");
});
$('.list-dealer__item').show();
$('input[name="brand"]').change(function () {
    var text = $('input[name="brand"]:checked').closest('label').text();
    $("#brand").text(text);
    $('#optionBrand').removeClass("active");

    var target = $('.' + $(this).attr('value'));
    $(".container-new-dealer .list-dealers__item").not(target).hide();
    target.fadeIn(500);

})


function  filterNew() {
    if ($("#checkbox-new").prop("checked") == true & $("#checkbox-asp").prop("checked") == false) {
        $(".container-asp-dealer").fadeOut(300);
    }else if ($("#checkbox-new").prop("checked") == true & $("#checkbox-asp").prop("checked") == true) {
        $(".container-asp-dealer").fadeIn(200);
        $(".container-new-dealer").fadeIn(200);
    } else if ($("#checkbox-new").prop("checked") == false & $("#checkbox-asp").prop("checked") == true){
        $(".container-asp-dealer").fadeIn(200);
        $(".container-new-dealer").fadeOut(200);
    }
    
    else{
        $(".container-asp-dealer").fadeIn(200);
    }
};

function filterAsp () {
    if ($("#checkbox-asp").prop("checked") == true & $("#checkbox-new").prop("checked") == false) {
        $(".container-new-dealer").fadeOut(300);
    } else if ($("#checkbox-asp").prop("checked") == true & $("#checkbox-new").prop("checked") == true){
        $(".container-new-dealer").fadeIn(200);
        $(".container-asp-dealer").fadeIn(200);
    } else if ($("#checkbox-asp").prop("checked") == false & $("#checkbox-new").prop("checked") == true) {
        $(".container-asp-dealer").fadeOut(200);
        $(".container-new-dealer").fadeIn(200);
    }
    
    else{
        $(".container-new-dealer").fadeIn(200);
    }
};


$(document).ready(function () {
    $('#checkbox-asp, #checkbox-new').change(function () {
        filterNew();
        filterAsp();
    });
});

