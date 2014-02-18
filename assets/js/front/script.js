(function($) {

    // Chargement des tooltips
    $('[rel^=tooltip]').tooltip();

    // Scroll top animé
    $(window).scroll( function (){
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


    // Gestion des butons radio de type button
    $('[data-toggle="buttons-radio"]').find('button').on('click', function() {
        $(this).siblings('input').val($(this).val());
    });

    // RATING VOTES
    $('.f-rating').rating({
        showCancel: false
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

    // changement icon de l'accordéon
    $('.accordion-group').on('show hide', function(n) {
        $(n.target).siblings('.accordion-heading').find('.accordion-toggle i')
                                .toggleClass('icon-plus-sign icon-minus-sign');
    });


    // SlideShow home
    $('#slideshow').carousel();


    // Animation du contenu
    var tp_content = $('.grille-voyant');
    var tp_sidebar_left = $('#sidebar-left');
    var tp_sidebar_right = $('#sidebar-right');

    if($('#block-content section').hasClass('grille-voyant')) {
      tp_content.css({
          position: "relative",
          right: "-30%",
          opacity: 0
      });
      tp_sidebar_left.hide();

      $(document).ready(function() {

          tp_content.delay(400).animate({
              right: 0,
              opacity: 1
          }, 600, 'swing');

          tp_sidebar_left.delay(300).fadeIn(600, 'swing');
      });
    }

    // Onglet tab des voyants
    $('#f-tab-voyant a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    })


    // animation flash message box
    $('#flash-msg').delay(700).fadeIn('slow');


})(jQuery);
