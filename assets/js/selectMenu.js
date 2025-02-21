const typeTourMenu = document.querySelector('.menu-items');

const taxonomyTourMenus = typeTourMenu.querySelectorAll('.menu-item-object-tipo_tour')

taxonomyTourMenus.forEach(function (taxonomyTourMenu) {
    let nameMenu = taxonomyTourMenu.querySelector('a').textContent;
    let sectionMenu = document.getElementById(nameMenu);
    const menuState = {
        taxonomyMenuLeft: false,
        sectionMenuLeft: false
    }

    taxonomyTourMenu.addEventListener('mouseenter', function () {
        sectionMenu.classList.add('active');

        console.log('entraste', menuState.taxonomyMenuLeft, menuState.sectionMenuLeft);

    });

    taxonomyTourMenu.addEventListener('mouseleave', function () {
        menuState.taxonomyMenuLeft = true;
        console.log('taxo ', menuState.taxonomyMenuLeft);

        verificarCierreMenu(menuState, sectionMenu);
    });
    sectionMenu.addEventListener('mouseleave', function () {
        menuState.sectionMenuLeft = true;
        console.log('sectionMenu ', menuState.taxonomyMenuLeft);

        verificarCierreMenu(menuState, sectionMenu);
    });
});

function verificarCierreMenu(menuState, sectionMenu) {
    console.log('saliste', menuState.taxonomyMenuLeft, menuState.sectionMenuLeft);

    if (menuState.taxonomyMenuLeft && menuState.sectionMenuLeft) {
        sectionMenu.classList.remove("active");
        // Restablecer las variables para futuras interacciones
        menuState.taxonomyMenuLeft = false;
        menuState.sectionMenuLeft = false;
        console.log('cerrar');

    }
}