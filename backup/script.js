// scripts.js

$(document).ready(function () {
    // Smooth scrolling for navigation menu items
    $('.nav-menu a').on('click', function (event) {
        if (this.hash !== '') {
            event.preventDefault();
            const hash = this.hash;

            $('html, body').animate(
                {
                    scrollTop: $(hash).offset().top,
                },
                800,
                function () {
                    window.location.hash = hash;
                }
            );
        }
    });

    // Show/hide content on click
    $('.toggle-content-btn').on('click', function () {
        $(this).next('.hidden-content').slideToggle();
    });
});
