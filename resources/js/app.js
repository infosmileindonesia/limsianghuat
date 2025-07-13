import PerfectScrollbar from 'perfect-scrollbar';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

import alcoholBrand from './alcoholbrand';
import nonalcoholbrand from './nonalcoholbrand';
import beverages from './beverages';
import consumerGoods from './consumergood';

window.Alpine = Alpine;

Alpine.data('alcoholSection', alcoholBrand);
Alpine.data('nonAlcoholSection', nonalcoholbrand);
Alpine.data('foodBrandsSection', beverages);
Alpine.data('consumerGoodsSection', consumerGoods);
Livewire.start();


var psStores = [];

const psElements = document.querySelectorAll('[data-perfect-scrollbar]');

if (psElements.length) {
    psElements.forEach((el) => {

        const wheelSpeed = el.getAttribute('data-wheel-speed') || 2;
        const wheelPropagation = el.getAttribute('data-wheel-propagation') || true;
        const minScrollbarLength = el.getAttribute('data-min-scrollbar-length') || 20;
        const maxScrollbarLength = el.getAttribute('data-max-scrollbar-length') || 100;

        const ps = new PerfectScrollbar(el, {
            wheelSpeed: parseFloat(wheelSpeed),
            wheelPropagation: (wheelPropagation === 'true'),
            minScrollbarLength: parseInt(minScrollbarLength),
            maxScrollbarLength: parseInt(maxScrollbarLength),
        });
        psStores.push(ps);
    });
};


import './bootstrap';

