import Swiper from "swiper";
import { Navigation } from "swiper/modules";

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';

export default () => ({
    init() {
        this.nonalcoholBrandsSwiper = null;
        this.loadSwiper();

    },
    loadSwiper() {
        if (this.nonalcoholBrandsSwiper) {
            console.log('destroying swiper');
            this.nonalcoholBrandsSwiper.destroy();
        }

        let swiperContainerClass = `.non-alcohol-brands-swiper`;

        this.nonalcoholBrandsSwiper = new Swiper(swiperContainerClass, {
            modules: [Navigation],
            slidesPerView: 2,
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
