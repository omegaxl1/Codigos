'use strict';

var menu = document.querySelector('#menu'),
    openMenu = document.querySelector('#open-menu'),
    closeMenu = document.querySelector('#close-menu');

openMenu.addEventListener('click', function () {
  menu.classList.add('mostrar');
});

closeMenu.addEventListener('click', function () {
  menu.classList.remove('mostrar');
});