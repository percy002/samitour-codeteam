let navbar = document.querySelector('nav');


window.addEventListener('scroll', function () {
    if (window.innerWidth > 1024) {

        if (window.scrollY > 50) {
            navbar.style.top = '0';
        } else {
            navbar.style.top = '34px';
        }
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const offset = 70;

    const anchors = document.querySelectorAll('.tour-menu a');
    if (anchors.length > 0) {
        anchors.forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.scrollY - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".mySwiper", {
        loop: true, // Hace que el carrusel sea infinito
        autoplay: {
            delay: 3000, // Cambia de imagen cada 3 segundos
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
});
