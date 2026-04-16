document.addEventListener('DOMContentLoaded', () => {
    const loader = document.getElementById('preloader');
    setTimeout(() => {
        loader.style.display = "none";
    }, 2100);


    $('.owl-carousel').owlCarousel({
        autoplay:true,
        autoplayTimeout: 7000
    });
})

