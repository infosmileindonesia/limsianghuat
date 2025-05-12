import Swiper from "swiper";
import { Autoplay, Grid, Navigation } from "swiper/modules";

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';

export default (activeTab) => ({
    activeTab: activeTab,
    init() {
        this.alcoholBrandsSwiper = null;
        this.reloadSwiper(activeTab);
        this.$watch('activeTab', (value) => {
            console.log('activeTab changed to: ' + value);
            this.reloadSwiper(value);
        });

    },
    setActiveTab(tab) {
        this.activeTab = tab;
    },
    reloadSwiper(activeTab) {
        if (this.alcoholBrandsSwiper) {
            console.log('destroying swiper');
            this.alcoholBrandsSwiper.destroy();
        }

        let swiperContainerClass = `.alcohol-brands-swiper-${activeTab}`;

        this.alcoholBrandsSwiper = new Swiper(swiperContainerClass, {
            modules: [Grid, Navigation, Autoplay],
            navigation: {
                nextEl: this.$refs.navNext,
                prevEl: this.$refs.navPrev,
            },
            autoplay: {
                delay: 1200,
                disableOnInteraction: false,
            },
            grid: {
                rows: 2,
                fill: 'row',
            },
            slidesPerView: 2,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    grid: {
                        rows: 1,
                        fill: 'row',
                    }
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    grid: {
                        rows: 1,
                        fill: 'row',
                    }
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    }
                },
            },

        });
    }
});
