// let i = 0;
// let txt = 'Selamat Datang di Website HIMTI.';
// let speed = 300;
// let text = document.getElementById("home-message");

// function typeWriter() {
//     if(i < txt.length) {
//         text.innerHTML += txt.charAt(i);
//         i++;
//         setTimeout(typeWriter, speed);
//     }
// }

// typeWriter()

// Hamburger
const hamburger = document.querySelector('#hamburger');

const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});


// navbar fixed 

window.onscroll = () => {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}