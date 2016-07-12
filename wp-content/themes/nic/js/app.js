$(function(){
	
	// $(window).load(function(){
	// 	$('#preloader').fadeOut('slow', function(){ 
	// 		$('.body-content').addClass('loaded');
	// 		$(this).remove();
	// 	});
	// });

	$(document).foundation();

	function carousel() {
		// Carousel Banner
		if($('.owl-carousel--banner .item').length < 2) {
			$('.owl-carousel--banner').owlCarousel({
			    loop: true,
			    margin: 0,
			    nav: true,
			    singleItem: true,
			    transitionStyle: "fade"
			});
		} else {
			$('.owl-carousel--banner').owlCarousel({
			    loop: true,
			    margin: 0,
			    nav: true,
			    autoPlay: true,
			    autoPlayTimeout: 8000,
			    items: 1
			    // animateIn: "fade"
			});
		}
	}

	carousel();
});