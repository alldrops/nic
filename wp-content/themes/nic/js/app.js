$(function(){
	
	$(window).load(function(){
		$('#preloader').fadeOut('slow', function(){ 
			$('.body-content').addClass('loaded');
			$(this).remove();
		});

		setTimeout(function() {
			$('#popupModal').foundation('reveal', 'open')
		}, 2000);
	});

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
			    autoPlay: 5000,
			    singleItem: true,
			    transitionStyle: "fade"
			});
		}
		// Carousel Testimonials
		if($('.owl-carousel--testimonials .item').length < 2) {
			$('.owl-carousel--testimonials').owlCarousel({
			    loop: true,
			    margin: 0,
			    nav: true,
			    singleItem: true,
			    pagination: false
			});	
		} else {
			$('.owl-carousel--testimonials').owlCarousel({
			    loop: true,
			    margin: 0,
			    nav: true,
			    autoPlay: 10000,
			    singleItem: true,
			    pagination: false
			});	
		}
	}

	function timelineAbout() {
		var timelineBlocks = $('.cd-timeline-block'),
			offset = 0.8;

		//hide timeline blocks which are outside the viewport
		hideBlocks(timelineBlocks, offset);

		//on scolling, show/animate timeline blocks when enter the viewport
		$(window).on('scroll', function(){
			(!window.requestAnimationFrame) 
				? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
				: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
		});

		function hideBlocks(blocks, offset) {
			blocks.each(function(){
				( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
			});
		}

		function showBlocks(blocks, offset) {
			blocks.each(function(){
				( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			});
		}
	}
	
	function reservationForm() {
		var $today = new Date();
		$yesterday = new Date($today);
		$yesterday.setDate($today.getDate() - 1);

		datepickr('#reservation-date', {
			minDate: $yesterday,
			dateFormat: 'm/d/Y'
		});

		$('#find-table').on('click', function(e){
			e.preventDefault();
			var date = $('#reservation-date').val(),
				time = $('#reservation-time').val(),
				time = time.split(' '),
				party = parseInt($('#reservation-party').val(), 10),
				resLocation = $('#reservation-location').val(),
				url = 'http://www.opentable.com/opentables.aspx?m=73&p='+party+'&d='+date+'%20'+time[0]+':00%20'+time[1]+'&rid='+resLocation+'&t=single&scpref=125';

			$(this).attr('href', url);
			window.open($(this).attr("href"), "_blank");
		});
	}

	$(window).on('scroll', function(){
		$('.cd-timeline-block').each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});

	carousel();
	timelineAbout();
	reservationForm();
});