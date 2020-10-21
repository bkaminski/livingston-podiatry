(function( $ ) {
	$( document ).ready(function() {

		//About us side menu active state
		$(function() {
		  var loc = window.location.href; // returns the full URL
		  if(/board-certified/.test(loc)) {
		    $('.board--certified').addClass('active');
		  }
		  if(/hospital-affiliations/.test(loc)) {
		    $('.hospital--affiliations').addClass('active');
		  }
		  if(/surgical-specialist/.test(loc)) {
		    $('.surgical--specialist').addClass('active');
		  }
		});

		//Animate slide up and down nav dropdowns.
			$('.dropdown').on('show.bs.dropdown', function(e) {
				$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
			});
			$('.dropdown').on('hide.bs.dropdown', function(e) {
				$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
			});

			//REMOVE TITLE TAG FROM LINK HOVER
			$('.nav-link').removeAttr('title');


	});	//end ready
})( jQuery );
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
