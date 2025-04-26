// import Swiper JS
import Swiper from 'swiper';
import { Mousewheel, Autoplay, EffectCards, Parallax, Pagination, Navigation, EffectFade } from 'swiper/modules';

// import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import 'swiper/css/effect-fade';
import 'swiper/css/parallax';

const swiper = new Swiper('.mySwiper', {
    modules: [Mousewheel, Autoplay, Parallax],
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    parallax: true,
});

const mapSwiper = new Swiper('.maps-swiper', {
    modules: [Pagination, Navigation],
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-maps-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-maps-button-next',
        prevEl: '.swiper-maps-button-prev',
    },
})

var distributionSwiper = new Swiper(".distributionSwiper", {
    modules: [Mousewheel, EffectCards, Parallax],
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 20,
    parallax: true,
    mousewheel: {
        enabled: true,
        sensitivity: 1,
        thresholdDelta: 0,
        thresholdTime: 100,
    },
    effect: "cards",
    cardsEffect: {
        slideShadows: true,
        perSlideOffset: 7,
        perSlideRotate: 0
    },
});

distributionSwiper.on('activeIndexChange', function (swiper) {

    console.log(swiper.activeIndex);


    // Add your custom logic here
});

document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.half-wrapper-swiper', {
        slidesPerView: 2.5,
        centeredSlides: false,
        loop: true,
        pagination: {
            el: '.half-wrapper-swiper-pagination',
            clickable: true,
        },
    });
});

const bulkSwiper = [];

const bulkSwiperContainer = document.querySelectorAll('[data-swiper="bulkswiper"]');

if (bulkSwiperContainer.length > 0) {
    bulkSwiperContainer.forEach((container, index) => {
        let className = container.getAttribute('data-class-name');

        bulkSwiper[index] = new Swiper(container, {
            modules: [Navigation, EffectFade, Pagination],
            slidesPerView: 1,
            effect: 'fade',
            navigation: {
                nextEl: `.right-arrow-${className}`,
                prevEl: `.left-arrow-${className}`,
            },
            pagination: {
                el: `.pagination-${className}`
            },
        });
    });
}

const testimonialSwiper = new Swiper('.testimonial-swiper', {
    modules: [Pagination, Parallax, EffectFade],
    pagination: {
        el: '.testimonial-swiper-pagination',
        clickable: true,
    },
    navigation: {
        enabled: false,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    parallax: true,
    spaceBetween: 50,
});

