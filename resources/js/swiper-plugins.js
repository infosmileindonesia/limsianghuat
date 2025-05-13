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
    modules: [Pagination, Navigation, Autoplay],
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
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


document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.half-wrapper-swiper', {
        modules: [Autoplay, Navigation],
        autoplay: {
            delay: 1700,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2.5,
                spaceBetween: 10,
            },
        },
        spaceBetween: 20,
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
        navigation: {
            enabled: true,
            nextEl: '.swiper-button-next-half-wrapper-swiper',
            prevEl: '.swiper-button-prev-half-wrapper-swiper',
        },
    });
});

const bulkSwiper = [];

const bulkSwiperContainer = document.querySelectorAll('[data-swiper="bulkswiper"]');

if (bulkSwiperContainer.length > 0) {
    bulkSwiperContainer.forEach((container, index) => {
        let className = container.getAttribute('data-class-name');

        bulkSwiper[index] = new Swiper(container, {
            modules: [Navigation, EffectFade, Pagination, Autoplay],
            slidesPerView: 1,
            effect: 'fade',
            navigation: {
                nextEl: `.right-arrow-${className}`,
                prevEl: `.left-arrow-${className}`,
            },
            pagination: {
                el: `.pagination-${className}`
            },
            autoplay: {
                delay: 800,
                disableOnInteraction: false,
            },
            loop: true,
        });
    });
}

const testimonialSwiper = new Swiper('.testimonial-swiper', {
    modules: [Pagination, Parallax, EffectFade, Autoplay, Navigation],
    pagination: {
        el: '.testimonial-swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 1700,
        disableOnInteraction: false,
    },
    loop: true,
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    parallax: true,
    spaceBetween: 50,
});

