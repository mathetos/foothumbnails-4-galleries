  if ( undefined !== window.jQuery ) {
		jQuery(function() {
		jQuery('.ftgtrigger').click(function(e) {
		e.preventDefault();
		var div = jQuery(this).attr('href');
		jQuery(div).find('a:first').click();
		});
	});
  }
