const header = document.querySelector('.header');
const hamburger = document.querySelector('.hamburger');
const headerLinks = document.querySelectorAll('.header__nav a');
//const headerLangTrigger = document.querySelector('.header__lang--active');
//const headerLang = document.querySelector('.header__lang');
const pageHeight = window.innerHeight * 0.1;

hamburger.addEventListener('click', () => {
    header.classList.toggle('--open')
})

headerLinks.forEach((link) => {
    link.addEventListener('click', () => {
        header.classList.remove('--open')
    })
})

// headerLangTrigger.addEventListener('click', () => {
//     headerLang.classList.toggle('--openLang')
// })

window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.classList.add('scrolled') : header.classList.remove('scrolled');
};