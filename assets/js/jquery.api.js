(function( $ ){
	
	/**
	 *	Fonction Toggler() qui remplace la fonction toggle(function, function) déprécié par
	 *  jQuery depuis les versions 1.9 et pourtant très pratique
	 *  
 	 * @param {Object} fn
 	 * @param {Object} fn2
	 */
	$.fn.toggler = function(fn, fn2) {
		var args = arguments, guid = fn.guid || $.guid++, i = 0, toggler = function(event) {
			var lastToggle = ($._data(this, "lastToggle" + fn.guid) || 0 ) % i;
			$._data(this, "lastToggle" + fn.guid, lastToggle + 1);
			event.preventDefault();
			return args[lastToggle].apply(this, arguments) || false;
		};
		toggler.guid = guid;
		while (i < args.length) {
			args[i++].guid = guid;
		}
		return this.click(toggler);
	}; 

  
  
})( jQuery );