/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/


window.addEventListener('DOMContentLoaded', () => {
  //Menu 
  const hamburger = document.querySelector('.menu__hamburger'),
        menu = document.querySelector('.menu__items'),
        menuLinks = document.querySelectorAll('.menu__item'),
        scroll = calcScroll();

  function openMenu() {
    menu.style.left = '0'; // document.body.style.overflow = 'hidden';

    menu.classList.add('menu__items_active');
    hamburger.classList.add('menu__hamburger_active');
    document.body.style.marginRight = `${scroll}px`;
  }

  function closeMenu() {
    menu.style.left = '-100%'; // document.body.style.overflow = '';

    setTimeout(() => {
      menu.classList.remove('menu__items_active');
    }, 200);
    hamburger.classList.remove('menu__hamburger_active');
    document.body.style.marginRight = `0px`;
  }

  hamburger.addEventListener('click', () => {
    if (menu.classList.contains('menu__items_active')) {
      closeMenu();
    } else {
      openMenu();
    }
  });
  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeMenu();
    });
  });

  function calcScroll() {
    let div = document.createElement('div');
    div.style.cssText = `
            width: 50px;
            height: 50px;
            overflow-y: scroll;
            visibility: hidden;
        `;
    document.body.appendChild(div);
    let scrollWidth = div.offsetWidth - div.clientWidth;
    div.remove();
    return scrollWidth;
  }

  $(document).ready(function () {
    $('.sertificate__items').slick({
      swipeToSlide: true,
      prevArrow: '<button type="button" class="slick-prev"><img src="/wp-content/themes/pogotowie/assets/icons/prev-btn.svg"></button>',
      nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/pogotowie/assets/icons/next-btn.svg"></button>',
      responsive: [{
        breakpoint: 768,
        settings: {
          prevArrow: false,
          nextArrow: false
        }
      }],
      autoplay: true,
      autoplaySpeed: 3000
    });
  });
});
/******/ })()
;
//# sourceMappingURL=script.js.map