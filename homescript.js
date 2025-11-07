document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.main-header');
        var secondHeader = document.querySelector('.second-header');

        if (window.scrollY > header.clientHeight / 2) { // Changed condition here
            header.classList.add('scrolled');
            secondHeader.style.display = 'block';
        } else {
            header.classList.remove('scrolled');
            secondHeader.style.display = 'none';
        }

        // Highlight the active section in the navbar
        document.addEventListener('DOMContentLoaded', function() {
            var currentPage = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
            var navLinks = document.querySelectorAll('.nav-link');
        
            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                }
            });
        });
    });
});
var slideIndex = 0;

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

showSlides();
