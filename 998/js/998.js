$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navContainer: '.customNav',
        navText: [$('.prev'), $('.next'), ],
        responsive: {
            1000: {
                items: 1
            },
            390: {
                items: 1
            }

        }
    })

})
       