import $ from "jquery";
import 'slick-carousel';

window.$ = $;
window.jQuery = $;

$(document).ready(() => {
    menu();
    sliders();
    isDesktop();
    input_range();
})

let isDesktop = () => {
    return $(window).width() > 1200
}

let menu = () => {
    $('header .nav a').click(function (e) {
        e.preventDefault();
        $('body').removeClass('fix');
        $('header').removeClass('is-active');
        $('.hamburger').removeClass('is-active');
    });
    if (!isDesktop()) {
        $('.hamburger').click(() => {
            $('body').toggleClass('fix');
            $('.hamburger').toggleClass('is-active');
            $('header').toggleClass('is-active');
        })
    }
}

let input_range = () => {
    const slider = document.getElementById("myRange");
    const output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
}

let sliders = () => {
    $('.works-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $(".prev-arrow"),
        nextArrow: $(".next-arrow"),
    });

    $('.products-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerPadding: '40px',
        prevArrow: $(".left-arrow"),
        nextArrow: $(".right-arrow"),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,

                }
            }
        ]
    });
}
