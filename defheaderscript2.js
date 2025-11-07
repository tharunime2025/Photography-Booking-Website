window.addEventListener('scroll', function() {
    var mainHeader = document.querySelector('.main-header');
    var secondHeader = document.querySelector('.second-header');

    if (window.scrollY >= mainHeader.offsetHeight) {
        secondHeader.classList.add('active');
    } else {
        secondHeader.classList.remove('active');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            navLinks.forEach(function(navLink) {
                navLink.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});
