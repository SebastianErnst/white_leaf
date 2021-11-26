import $ from 'jquery';
import lightGallery from 'lightgallery';
import 'lg-video';
import { smoothScroll } from "foundation-sites";

// require('particles.js');

class MainApplication {
    constructor() {
        $(document).foundation();

        $('.burger-menu').on('click', () => {
            $('.main-menu').toggleClass('is-open');
        });


        $('.main-menu').find('a').on('click', () => {
            if ($('.main-menu').hasClass('is-open') === true) {
                $('.main-menu').toggleClass('is-open');
            }
        });

        $('.horizontal-teaser a').on('click', (event) => {
            event.preventDefault();
        });

        $('[data-gallery]').each((index, element) => {
            $(element).lightGallery({
                download: false,
                controls: false,
                counter: false,
                enableDrag: false,
                enableTouch: false
            });
        });

        $('[data-modal-open]').on('click', (event) => {
            event.preventDefault();
            $('[data-modal]').toggleClass('is-active');
        });

        $('[data-modal-close]').on('click', (event) => {
            event.preventDefault();
            $('[data-modal]').toggleClass('is-active');
        });


    }
}

new MainApplication();

