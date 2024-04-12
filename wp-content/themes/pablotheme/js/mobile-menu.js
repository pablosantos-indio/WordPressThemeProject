// Este código deve ser salvo em um arquivo chamado 'mobile-menu.js' no diretório do tema.
document.addEventListener('DOMContentLoaded', function() {
    var menuIcon = document.querySelector('.menu-icon');
    var nav = document.querySelector('nav');

    menuIcon.addEventListener('click', function() {
        nav.classList.toggle('active');
    });
});
