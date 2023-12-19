// JavaScript to highlight the current page link in the navigation menu

document.addEventListener('DOMContentLoaded', function() {
    // Get the current URL
    var currentPageUrl = window.location.href;

    // Get all links in the navigation menu
    var navLinks = document.querySelectorAll('nav a');

    // Loop through each link and add a highlight style to the current page link
    navLinks.forEach(function(link) {
        if (link.href === currentPageUrl) {
            link.style.boxShadow = '0px 6px 10px rgba(0, 0, 0, 0.2)';
        }
    });
});