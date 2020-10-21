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
		  if(/request-information/.test(loc)) {
		    $('.request--information').addClass('active');
		  }
		  if(/insurance/.test(loc)) {
		    $('.livingston--insurance').addClass('active');
		  }
		  if(/senior-care/.test(loc)) {
		    $('.senior--care').addClass('active');
		  }
		  if(/patient-forms/.test(loc)) {
		    $('.patient--forms').addClass('active');
		  }
		  if(/patient-testimonials/.test(loc)) {
		    $('.patient--testimonials').addClass('active');
		  }
		  if(/helpful-links/.test(loc)) {
		    $('.helpful--links').addClass('active');
		  }
		  if(/our-facility/.test(loc)) {
		    $('.our--facility').addClass('active');
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