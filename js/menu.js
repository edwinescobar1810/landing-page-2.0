const menu = document.querySelector('.menu');
const menuSection = menu.querySelector('.menu-section');
const menuArrow = menu.querySelector('.menu-mobile-arrow');
const menuClosed = menu.querySelector('.menu-mobile-close');
const menuTrigger = document.querySelector('.menu-mobile-trigger');
const menuOverlay = document.querySelector('.overlay');
let subMenu;
menuSection.addEventListener('click', (e) => {
    if (!menu.classList.contains('active')) {
        return;
    }
    if (e.target.closest('.menu-item-has-children')) {
        const hasChildren = e.target.closest('.menu-item-has-children');
        showSubMenu(hasChildren);
    }
});
menuArrow.addEventListener('click', () => {
    hideSubMenu();
});
menuTrigger.addEventListener('click', () => {
    toggleMenu();
});
menuClosed.addEventListener('click', () => {
    toggleMenu();
});
menuOverlay.addEventListener('click', () => {
    toggleMenu();
});
function toggleMenu() {
    menu.classList.toggle('active');
    menuOverlay.classList.toggle('active');
}
function showSubMenu(hasChildren) {
    subMenu = hasChildren.querySelector('.menu-subs');
    subMenu.classList.add('active');
    subMenu.style.animation = 'slideLeft 0.5s ease forwards';
    const menuTitle = hasChildren.querySelector('i').parentNode.childNodes[0].textContent;
    menu.querySelector('.menu-mobile-title').innerHTML = menuTitle;
    menu.querySelector('.menu-mobile-header').classList.add('active');
}
function hideSubMenu() {
    subMenu.style.animation = 'slideRight 0.5s ease forwards';
    setTimeout(() => {
        subMenu.classList.remove('active');
    }, 300);
    menu.querySelector('.menu-mobile-title').innerHTML = '';
    menu.querySelector('.menu-mobile-header').classList.remove('active');
}
window.onresize = function () {
    if (this.innerWidth > 991) {
        if (menu.classList.contains('active')) {
            toggleMenu();
        }
    }
};

    function actualizarPrecio() {
        var select = document.getElementById("segmento");
        var precioActual = document.getElementById("precioActual");
        var tachado = document.getElementById("tachado");

        if (select.value == "1") {
            precioActual.innerText = "$74.940";  // Precio actualizado para Emprendedor
            tachado.innerText = "$124.900";
        } else if (select.value == "2") {
            precioActual.innerText = "$69.940";  // Precio actualizado para Blue
            tachado.innerText = "$124.900";
        }else if(select.value == "3"){
            precioActual.innerText = "$67.945";  // Precio actualizado para Rose
            tachado.innerText = "$124.900";
        }else if(select.value == "4"){
            precioActual.innerText = "$64.948";  // Precio actualizado para Gold
            tachado.innerText = "$124.900";
        }else if(select.value == "5"){
            precioActual.innerText = "$64.948";  // Precio actualizado para Emerald
            tachado.innerText = "$124.900";
        }
        // Puedes agregar más condiciones según tus necesidades para otras opciones
    }