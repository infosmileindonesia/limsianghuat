import Swiper from "swiper";
import { Navigation } from "swiper/modules";

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
            modules: [Navigation],
            slidesPerView: 3,
            navigation: {
                nextEl: this.$refs.navNext,
                prevEl: this.$refs.navPrev,
            },
            spaceBetween: 30
        });
    }
});