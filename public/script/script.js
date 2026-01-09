
document.addEventListener('DOMContentLoaded', () => {
    const menubar = document.querySelector('#menu-btn');
    const navbar = document.querySelector('#BarMenu');

    if (menubar && navbar) {
        menubar.addEventListener('click', () => {
            navbar.classList.toggle('hidden');
        });
    }
});
