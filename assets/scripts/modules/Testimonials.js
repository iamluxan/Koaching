import { module } from 'modujs';

import Swiper from 'swiper/bundle';

export default class extends module {
    constructor(m) {
        super(m);

        this.mySwiper;
        this.slider = document.querySelector('.c-testimonials .swiper');
    }

    init() {
        this.mySwiper = new Swiper(this.slider, {
            // centeredSlides: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            autoHeight: false,
            // calculateHeight: true,
            // rewind: true,
            lazy: {
                loadPrevNext: true,
            },
            // navigation: {
            //     nextEl: ".linkedin-next",
            //     prevEl: ".linkedin-prev",
            // },
            spaceBetween: 20, // 4*space
            navigation: {
                nextEl: '.c-testimonials_nav .c-button[data-horizontal-panel="next"]',
                prevEl: '.c-testimonials_nav .c-button[data-horizontal-panel="prev"]',
            },

        });
    }

}