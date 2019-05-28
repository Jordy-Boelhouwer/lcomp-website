
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel'
import 'bootstrap'
require('./turn');
require('./zoom');
require('./hash');
require('flatpickr/dist/flatpickr.min.js');
const flatpickr = require('flatpickr/dist/flatpickr.min.js');
import { Dutch } from "flatpickr/dist/l10n/nl.js"

$('div.alert').not('.alert-important').delay(3000).fadeOut(350);

(function () {
    if ($('#book').length > 0) {
        'use strict';

        var module = {
            ratio: 1.38,
            init: function (id) {
                var me = this;

                // if older browser then don't run javascript
                if (document.addEventListener) {
                    this.el = document.getElementById(id);
                    this.resize();
                    this.plugins();

                    // on window resize, update the plugin size
                    window.addEventListener('resize', function (e) {
                        var size = me.resize();
                        $(me.el).turn('size', size.width, size.height);
                    });
                }
            },
            resize: function () {
                // reset the width and height to the css defaults
                this.el.style.width = '';
                this.el.style.height = '';

                var width = this.el.clientWidth,
                    height = Math.round(width / this.ratio),
                    padded = Math.round(document.body.clientHeight * 0.9);

                // if the height is too big for the window, constrain it
                if (height > padded) {
                    height = padded;
                    width = Math.round(height * this.ratio);
                }

                // set the width and height matching the aspect ratio
                this.el.style.width = width + 'px';
                this.el.style.height = height + 'px';

                return {
                    width: width,
                    height: height
                };
            },
            plugins: function () {
                // run the plugin
                $(this.el).turn({
                    gradients: true,
                    acceleration: true
                });
                // hide the body overflow
                document.body.className = 'hide-overflow';
            }
        };

        module.init('book');
    }
}());

flatpickr($("#datepicker"), {
    inline: true,
    locale: Dutch,
});

$(".references-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    dots: true,
    autoplaySpeed: 6000,
    // responsive: [
    //     {
    //         breakpoint: 1024,
    //         settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 2,
    //             infinite: true,
    //             dots: true
    //         }
    //     },
    //     {
    //         breakpoint: 600,
    //         settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 2
    //         }
    //     },
    //     {
    //         breakpoint: 480,
    //         settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //         }
    //     }]
});

$(".partner-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    autoplaySpeed: 6000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
});

$(".valentine-slider").slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 6000,
    dots: true,
});



