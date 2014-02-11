(function($) {

    // Chargement des tooltips
    $('[rel~=tooltip]').tooltip();
    
    // Scroll top animé
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#hover-zetop').fadeIn();
        } else {
            $('#hover-zetop').fadeOut();
        }
    }); 

    $('#hover-zetop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    
    // Dropdown effet slide
    $('#navigation .dropdown-toggle').click(function(e) {
        $(this).next('.dropdown-menu').slideToggle('fast');
        //important for stop it event follower
        return false;
    });
    
    $(document).bind('click', function() {
        if($('#navigation .dropdown').is(':visible')) {
            $(this).find('.dropdown-menu').slideUp('fast');
        }
    });
    
//    $('.f-rating').rating('www.url.php', {
//        maxvalue: 5,
//        curvalue: 1
//    });
    
    // SlideShow home
    $('#slideshow').carousel();
    

})(jQuery);