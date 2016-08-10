$(function(){

	$(document).foundation();

    $('.program--nic').on('click', function(e) {
        e.preventDefault();
    });

    $('.main-nav > ul > li.main-nav__programs > .sub-menu > li > a').on('click', function(e) {
    	e.preventDefault();
    })

	function carousel() {
		// Carousel Banner
		if($('.owl-carousel--banner .item').length < 2) {
			$('.owl-carousel--banner').owlCarousel({
			    loop: false,
			    margin: 0,
			    nav: false,
			    pagination: false,
			    autoPlay: false,
			    items: 1
			    // items: 1
			});
			$('.owl-carousel--banner').addClass('owl-carousel--banner--single');
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

	function tabs() {
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		
		$('.tab ul.tabs li a').click(function (g) { 
			var tab = $(this).closest('.tab'), 
				index = $(this).closest('li').index();
			
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			
			g.preventDefault();
		});
	}

	function accordion() {
		var allPanels = $('.accordion > dd').hide();

		$('.accordion > dt > a').click(function() {
			allPanels.slideUp();
			$('.accordion > dt').removeClass('open');
			$(this).parent().next().slideDown();
			$(this).parent().addClass('open');
			return false;
		});
	}

	function programHighlighter() {

		var $category = $('.category-container .box-bg');
		var $programsContainer = $('.programs-container');

		
		$category.on('click', function(e) {
			e.preventDefault();
			$category.removeClass('selected');
			$(this).addClass('selected');
			$programsContainer.addClass('active');


			var activeCls = $(this).data('program');

			$.each($programsContainer.find('.box-bg'), function(i, item) {
				$(this).removeClass('selected');
				if ($(this).hasClass(activeCls)) {
					$(this).addClass('selected');
				}
			});

            $('html, body').stop().animate({
                'scrollTop': $('.programs-container').offset().top - 30
            }, 800, 'swing');
		});
	}

	carousel();
	scrollTip();
	programHighlighter();
	tabs();
	accordion();
});