import Swiper from "swiper";
import { Autoplay, Navigation } from "swiper/modules";

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';

export default () => ({
    init() {
        this.foodBrandsSwiper = null;
        this.loadSwiper();
    },
    loadSwiper() {
        if (this.foodBrandsSwiper) {
            console.log('destroying swiper');
            this.foodBrandsSwiper.destroy();
        }

        let swiperContainerClass = `.food-brands-swiper`;

        this.foodBrandsSwiper = new Swiper(swiperContainerClass, {
            modules: [Navigation, Autoplay],
            slidesPerView: 2,
            autoplay: {
                delay: 1200,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: this.$refs.navNext,
                prevEl: this.$refs.navPrev,
            },
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
            },
        });
    }
});
