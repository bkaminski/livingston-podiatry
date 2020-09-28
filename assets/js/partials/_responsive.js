(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 976) {
			$('.navbar-collapse').removeClass('.justify-content-md-center');
			$('.nav--logo').width(260);
			$('.footer--right').find('p').removeClass('text-right');
			$('.foot--social').removeClass('text-center');
		};
		if ($window.width() >= 976) {
			$('.navbar-collapse').addClass('.justify-content-md-center');
			$('.nav--logo').width(350);
			$('.footer--right').find('p').addClass('text-right');
			$('.foot--social').addClass('text-center');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );
