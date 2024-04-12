document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.querySelector('.menu-toggle');
    var mainNav = document.querySelector('#primary-menu');

    menuToggle.addEventListener('click', function() {
        var expanded = this.getAttribute('aria-expanded') === 'true' || false;
        this.setAttribute('aria-expanded', !expanded);
        mainNav.classList.toggle('active');
    });
});
