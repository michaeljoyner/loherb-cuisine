/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import throttle from "lodash.throttle";

require('./bootstrap');
// import "flickity";
import "flickity-imagesloaded";
import "lazysizes";
import jump from "jump.js";
import Vue from "vue";

import ContactForm from './components/ContactForm';
import BookingsPage from './components/BookingsPage';

Vue.component('contact-form', ContactForm);
Vue.component('bookings-page', BookingsPage);

import Usher from "./Usher";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('contact-form', require('./components/ContactForm'));

const app = new Vue({
    el: '#app'
});

const nav_trigger = document.querySelector('#nav-trigger');
const main_nav = document.querySelector('.main-nav');

nav_trigger.addEventListener('click', () => {
    if(main_nav.classList.contains('expose')) {
        document.body.classList.remove('nav-open');
        return main_nav.classList.remove('expose');
    }
    document.body.classList.add('nav-open');
    main_nav.classList.add('expose')
}, false);

window.addEventListener('scroll', throttle(() => {
    if(window.scrollY > 25) {
        return main_nav.classList.add("scrolled");
    }
    main_nav.classList.remove("scrolled");
}, 150));

window.addEventListener('DOMContentLoaded', () => {

    const usher = new Usher();
    [...document.querySelectorAll('a')].filter(a => a.href == window.location.toString()).forEach(a => a.classList.add('active'));

    function removeArrow(ev) {
        const target = ev ? ev.target : null;
        const arrows = [...document.querySelectorAll('.horizontal-scroll-arrow-indicator')];
        arrows.forEach(a => a.classList.add('hidden'));
        if(target) {
            target.removeEventListener('scroll', removeArrow);
        }
    }

    [...document.querySelectorAll('.horizontal-scroll-menu')]
        .forEach(menu => {
            const sw = menu.scrollWidth;
            const cw = menu.clientWidth;
            if(sw <= cw) {
                return removeArrow();
            }
            menu.addEventListener('scroll', removeArrow)
        });

    [...document.querySelectorAll('.menu-scroller')].forEach(el => {
        if(el.scrollWidth > window.innerWidth) {
            el.scrollLeft = (el.scrollWidth / 2) - (window.innerWidth / 2);
        }
    });
});

[...document.querySelectorAll('[data-jump-target]')].forEach(e => {
    e.addEventListener('click', (ev) => {
        ev.preventDefault();
        let target = ev.target.getAttribute('data-jump-target') || '#app';
        if(!target.startsWith('#')) {
            target = `#${target}`;
        }
        const offset = parseInt(ev.target.getAttribute('data-jump-offset')) || 0;
        jump(target, {offset});
    });
});

if(document.querySelector('[data-banner-jump]')) {
    document.querySelector('[data-banner-jump]').addEventListener('click', e => {
        e.preventDefault();
        jump('.post-banner', {offset: -48});
    });
}


import HolyScroller from "./HolyScroller";
window.HolyScroller = HolyScroller;
