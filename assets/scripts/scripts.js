var showedAllCallouts = false;

$(document).ready(function () {
    initResizes();
    initSliderAnchorClick();
    initShowAllCalloutsButton();
    initModal();
    initSelect();
});

$(window).resize(function () {
    initResizes();
});

function initResizes() {
    if (screen.width <= 600) {
        $('#al-slider-wrapper').removeClass('valign-wrapper');
        $('#al-reviews-title').css('padding-top', 36);
    } else {
        $('#al-slider-wrapper').addClass('valign-wrapper');
        $('#al-reviews-title').css('padding-top', 24);
    }

    $('.carousel.carousel-slider').carousel({ full_width: true });
}

function initSliderAnchorClick() {
    var offset = 64;

    $('#al-slider-anchor').click(function () {
        var destination = $('.al-green').offset().top - 100 - (screen.width > 600 ? offset : 0);
        $('body').animate({ scrollTop: destination }, 1000);
        return false;
    });
}

function initShowAllCalloutsButton() {
    $('#al-show-all-callouts').click(function () {
        if (!showedAllCallouts) {
            $('.al-callout-hidden').show();
            var destination = $(this).offset().top;
            $('body').animate({ scrollTop: destination }, 1000);
            $(this).text('СКРЫТЬ ОТЗЫВЫ');
            showedAllCallouts = true;
        } else {
            $('.al-callout-hidden').hide(1000);
            $(this).text('ПОСМОТРЕТЬ ВСЕ ОТЗЫВЫ');
            showedAllCallouts = false;
        }

        return false;
    });
}

function initModal() {
    $('.modal-trigger').leanModal();
}

function initSelect() {
    $('select').material_select();
}