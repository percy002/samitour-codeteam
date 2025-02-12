let navbar = document.querySelector('nav');


window.addEventListener('scroll', function () {
    if (window.innerWidth > 768) {

        if (window.scrollY > 50) {
            navbar.style.top = '0';
        } else {
            navbar.style.top = '34px';
        }
    }
});