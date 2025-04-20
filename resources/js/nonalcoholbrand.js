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
            slidesPerView: 3,
            navigation: {
                nextEl: this.$refs.navNext,
                prevEl: this.$refs.navPrev,
            },
            spaceBetween: 30
        });
    }
});