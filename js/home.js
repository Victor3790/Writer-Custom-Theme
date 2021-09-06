(function( $ ) {

    AOS.init({
        disable: 'mobile',
        duration: 600,
        once: true,
    });

    let owl = $('.owl-carousel3');
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

})( jQuery );
