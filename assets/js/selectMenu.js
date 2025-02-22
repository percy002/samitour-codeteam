const menuContainer = document.querySelector('.nav-menu');
const topNav = document.querySelector('.top-nav');

function ocultarTodosLosSubmenus() {
    document.querySelectorAll('.submenu').forEach((submenu) => {
        submenu.classList.remove('active');
    });
}

menuContainer.addEventListener('mouseover', function (event) {
    const menuItem = event.target.closest('.menu-item-object-tipo_tour');    
    if (menuItem) {
        ocultarTodosLosSubmenus(); 
        let nameMenu = menuItem.querySelector('a').textContent;
        let sectionMenu = document.getElementById(nameMenu);

        if (sectionMenu) {
            sectionMenu.classList.add('active');
        }
    } else {
        ocultarTodosLosSubmenus();
    }
});
document.querySelectorAll('.submenu').forEach((submenu) => {
    submenu.addEventListener('mouseleave', ocultarTodosLosSubmenus);
});
topNav.addEventListener('mouseover',ocultarTodosLosSubmenus)
document.addEventListener('mouseleave', ocultarTodosLosSubmenus);
