(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 992) {
			$('.navbar-collapse').removeClass('.justify-content-md-center');
			$('.nav--logo').width(200);
			
		};
		if ($window.width() >= 992) {
			$('.navbar-collapse').addClass('.justify-content-md-center');
			$('.nav--logo').width(350);
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );
