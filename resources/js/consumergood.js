import Swiper from "swiper";
import { Autoplay, Navigation } from "swiper/modules";

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';

export default () => ({
    init() {
        this.consumerGoodsBrandsSwiper = null;
        this.loadSwiper();

    },
    loadSwiper() {
        if (this.consumerGoodsBrandsSwiper) {
            console.log('destroying swiper');
            this.consumerGoodsBrandsSwiper.destroy();
        }

        let swiperContainerClass = `.consumer-goods-brands-swiper`;

        this.nonalcoholBrandsSwiper = new Swiper(swiperContainerClass, {
            modules: [Navigation, Autoplay],
            autoplay: {
                delay: 1200,
                disableOnInteraction: false,
            },
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
