$(function(){

	$(document).foundation();

	function carousel() {
		// Carousel Banner
		if($('.owl-carousel--banner .item').length < 2) {
			$('.owl-carousel--banner').owlCarousel({
			    loop: true,
			    margin: 0,
			    nav: false,
			    autoPlay: false,
			    items: 1
			    // items: 1
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

	function scrollTip() {
		$('.scroll-tip').on('click', function() {
			$('html, body').stop().animate({
		        'scrollTop': $('.page-content').offset().top
			}, 500, 'swing');
		});
	}

	(function ($) { 
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		
		$('.tab ul.tabs li a').click(function (g) { 
			var tab = $(this).closest('.tab'), 
				index = $(this).closest('li').index();
			
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			
			g.preventDefault();
		} );
	})(jQuery);

	var allPanels = $('.accordion > dd').hide();
	    
	  $('.accordion > dt > a').click(function() {
	    allPanels.slideUp();
	    $('.accordion > dt').removeClass('open');
	    $(this).parent().next().slideDown();
	    $(this).parent().addClass('open');
	    return false;
	  });

	carousel();
	scrollTip();
});