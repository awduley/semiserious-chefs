// Script to show or hide the mobile navigation menu
// Here we are getting the few DOM elements we need and putting them in variables
const hamburgerBtn = document.querySelector('.hamburger-btn');
const line1 = document.querySelector('.line-1');
const line2 = document.querySelector('.line-2');
const line3 = document.querySelector('.line-3');
const navMainMobile = document.querySelector('.nav-main__mobile');

hamburgerBtn.addEventListener('click', () => {
  line1.classList.toggle('line-1-move');
  line2.classList.toggle('line-2-move');
  line3.classList.toggle('line-3-move');
  console.log('nope');
  navMainMobile.classList.toggle('main-menu-toggle');
});

addEventListener('scroll', () => {
  navMainMobile.classList.remove('main-menu-toggle');
  line1.classList.remove('line-1-move');
  line2.classList.remove('line-2-move');
  line3.classList.remove('line-3-move');
});

addEventListener('resize', () => {
  if(window.innerWidth >= 768) {
    navMainMobile.classList.remove('main-menu-toggle');
    line1.classList.remove('line-1-move');
    line2.classList.remove('line-2-move');
    line3.classList.remove('line-3-move');
  }
});