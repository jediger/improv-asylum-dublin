(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$('.slideshow').slick({
			slidesToShow: 1,
			arrows: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 4000
		});
		
		$('.ads').slick({
			slidesToShow: 3,
			arrows: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 2000
		});
		
	});
	
})(jQuery, this);
