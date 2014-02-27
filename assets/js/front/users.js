(function($) {
	
    // DISABLED et ENABLED les champs à éditer
    
    
    $('.disabled-fields input[disabled]').each(function() {
        
        var _targetInput = null;
        $(this).next('.f-edit').bind('click', function() {
            
            _targetInput = $(this).prev('input');
            if(_targetInput.is('[disabled]'))
            {
            	_targetInput.attr('disabled', false);
            } else {
            	_targetInput.attr('disabled', true);
            }
            
            return false;
        });
        
    });
    
	
})(jQuery);
