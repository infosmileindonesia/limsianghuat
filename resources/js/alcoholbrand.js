import Swiper from "swiper";
import { Grid, Navigation } from "swiper/modules";

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
            modules: [Grid, Navigation],
            slidesPerView: 3,
            navigation: {
                nextEl: this.$refs.navNext,
                prevEl: this.$refs.navPrev,
            },
            grid: {
                rows: 2,
                fill: 'row',
    
            },
            spaceBetween: 30
        });
    }
});