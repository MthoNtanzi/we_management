window.addEventListener('scroll', function () {
    const navbar = document.getElementById('mainNavNew');
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});
