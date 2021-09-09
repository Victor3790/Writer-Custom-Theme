(function( $ ) {

$(document).ready(function() {

    $('#vids_tabs').tabs();

    $('.video_category_nav_item').click( function(){

        $('.video_category_nav_item').children('.nav-link').removeClass('active');

        $(this).children('.nav-link').addClass('active');

    });

});

})( jQuery );
