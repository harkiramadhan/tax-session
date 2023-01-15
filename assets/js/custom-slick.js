$(document).ready(function(){
    $('.list-partner').slick({
        infinite: true,
        centerPadding: '10px',
        slidesToShow: 5,
        slidesToScroll: 1,
        // variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        responsive: [
            {
            breakpoint: 1200,
            settings:
                {
                    slidesToShow:4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 800,
                settings:
                {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 600,
                settings:
                {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            }
        ]
    });

    $('.list-banner').slick({
        infinite: true,
        centerPadding: '40px',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow:'<button type="button" class="btn btn-dark rounded-circle banner-button-prev"><span class="material-symbols-outlined">arrow_back</span></button>',
        nextArrow:'<button type="button" class="btn btn-dark roun,ded-circle banner-button-next"><span class="material-symbols-outlined">arrow_forward</span></button>',

        responsive: [
            {
            breakpoint: 1200,
            settings:
                {
                },
            },
            {
                breakpoint: 800,
                settings:
                {
                    arrows: false,
                },
            },
            {
                breakpoint: 600,
                settings:
                {
                    arrows: false,
                },
            }
        ]
    });

    $('.daftar-testimoni').slick({
        infinite: true,
        centerPadding: '40px',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow:'<button type="button" class="btn btn-dark rounded-circle banner-button-prev"><span class="material-symbols-outlined">arrow_back</span></button>',
        nextArrow:'<button type="button" class="btn btn-dark rounded-circle banner-button-next"><span class="material-symbols-outlined">arrow_forward</span></button>',

        responsive: [
            {
            breakpoint: 1200,
            settings:
                {
                },
            },
            {
                breakpoint: 800,
                settings:
                {
                    arrows: false,
                },
            },
            {
                breakpoint: 600,
                settings:
                {
                    arrows: false,
                },
            }
        ]

    });

    $('.btn-redirect').click(function(){
        var url = $(this).attr('data-url')
        window.location.href = url
    })
});