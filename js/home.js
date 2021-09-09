(function( $ ) {

$(document).ready(function() {
    AOS.init({
        disable: 'mobile',
        duration: 600,
        once: true,
    });

    var owl = $('.owl-carousel1');

    owl.owlCarousel({
        stagePadding: 30,
        margin: 10,
        loop: true,
        navText:[
            "<img width='35px' src='wp-content/themes/writer-custom/assets/img/wr-images/left.png' alt='Left'>",
            "<img width='35px' src='wp-content/themes/writer-custom/assets/img/wr-images/right.png' alt='Right'>"
        ],
        responsive: {
            0: {
                items: 2
            },
            550: {
                items: 3
            },
            740: {
                items: 4,
                nav:true
            },
            1100: {
                items: 6,
                nav:true
            }
        }
    });

    owl = $('.owl-carousel2');
    owl.owlCarousel({
        stagePadding: 50,
        margin: 10,
        loop: true,
        navText:["<img width='35px' src='assets/img/wr-images/left.png' alt='Left'>"," <img width='35px' src='assets/img/wr-images/right.png' alt='Right'>"],
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            900: {
                items: 3
            },
            1500: {
                items: 4,
                nav:true
                
            }
        }
    });

    owl = $('.owl-carousel3');
    owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        loop: true,
        navText:[
            "<img width='35px' src='wp-content/themes/writer-custom/assets/img/wr-images/left.png' alt='Left'>",
            "<img width='35px' src='wp-content/themes/writer-custom/assets/img/wr-images/right.png' alt='Right'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            1100: {
                items: 3,
                nav:true
                
            }
        }
    });

    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 3
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    });

});

})( jQuery );
