// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';

const swiper = new Swiper('.mySwiper', {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});
