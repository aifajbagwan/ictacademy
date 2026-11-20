$(document).ready(function(){
    $(".header-carousel").owlCarousel({
        items: 1,                // Number of items to display
        loop: true,              // Loop through items
        autoplay: true,          // Enable autoplay
        autoplayTimeout: 3000,   // 3 seconds per slide
        autoplayHoverPause: true // Pause on hover
    });
});
