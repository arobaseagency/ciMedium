(function($) {


    // Lancer le datepicker
    $('.pickerdate').pickmeup({
    	hide_on_select: true,
    	position: 'right'
    });

    // Gestion avatar des membres display boutons
    $('#picture-avatar').hover(function() {
        $(this).find('.btn-group').show('normal');
    }, function() {
        $(this).find('.btn-group').hide('normal');
    });

})(jQuery);
