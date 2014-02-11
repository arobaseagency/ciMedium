(function($) {

    // Chargement des tooltips
    $('[rel~=tooltip]').tooltip();
    
    // Dropdown effet slide
    $('.navbar-static-top .dropdown-toggle').click(function(e) {
        $(this).next('.dropdown-menu').slideToggle('fast');
        //important for stop it event follower
        return false;
    });
    
    $(document).bind('click', function() {
        if($('.navbar-static-top .dropdown').is(':visible')) {
            $(this).find('.dropdown-menu').slideUp('fast');
        }
    });
    
    $('.f-rating').rating('www.url.php', {
        maxvalue: 5,
        curvalue: 1
    });

})(jQuery);