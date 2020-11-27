(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 976) {
			$('.navbar-collapse').removeClass('.justify-content-md-center');
			$('.nav--logo').width(240);
			$('.footer--right').find('p').removeClass('text-right');
			$('.foot--social').removeClass('text-center');
			$('.hero--1').addClass('text-center').removeClass('float-left');
			$('.hero--2').addClass('text-center').removeClass('float-right');
		};
		if ($window.width() >= 976) {
			$('.navbar-collapse').addClass('.justify-content-md-center');
			$('.nav--logo').width(350);
			$('.footer--right').find('p').addClass('text-right');
			$('.foot--social').addClass('text-center');
			$('.hero--1').removeClass('text-center').addClass('float-left');
			$('.hero--2').removeClass('text-center').addClass('float-right');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );
