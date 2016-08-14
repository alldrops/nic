<footer id="footer" class="footer" role="contentinfo">
	<div class="row">
		<div class="column small-12 medium-4 column--info">
			<span class="footer__title">New Image College</span>
			<p>
				Hastings: (604) 685-8807 <br>
				Granville: (604) 685-8807 <br>
				Toll Free: +1 (866) 354-6243
			</p>
			<p>
				<a href="#">info@newimage.ca</a>
			</p>
		</div>
		<div class="column small-12 medium-4 column--social">
			<a href="#" data-reveal-id="modal-advisor" class="button success">Talk to a Program Advisor</a>
			<section class="social-nav">
				<a href="https://www.facebook.com/newimagecollege/" target="_blank" title="Facebook" class="social__icon social__icon--facebook">Facebook</a>
				<a href="https://www.instagram.com/newimagecollege/" target="_blank" title="Instagram" class="social__icon social__icon--instagram">Instagram</a>
				<!-- <a href="#" target="_blank" title="Twitter" class="social__icon social__icon--twitter">Twitter</a> -->
				<!-- <a href="#" target="_blank" title="Google+" class="social__icon social__icon--google">Google+</a> -->
				<a href="https://www.youtube.com/user/newimagecollege/videos" target="_blank" title="Youtube" class="social__icon social__icon--youtube">Youtube</a>
			</section>
		</div>
		<div class="column small-12 medium-4 column--accreditations">
			<div class="acc">
				<a href="http://www.bceqa.ca/" target="_blank" class="acc-icon acc-icon--bceqa">bceqa</a>
				<a href="http://www.ubcp.com/" target="_blank" class="acc-icon acc-icon--ubcp">ubcp</a>
				<a href="http://www.pctia.bc.ca/" target="_blank" class="acc-icon acc-icon--pctia">pctia</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="column small-12">
			<span class="separator"></span>
		</div>
	</div>
	<div class="row footer-end">
		<div class="column small-12 medium-4 footer__info">
			<nav class="footer-nav">
				<?php 
					wp_nav_menu( array(
					    'theme_location' => 'footer-nav',
					    'container' => false,
					    'menu_class' => '',
					    'menu_id' => ''
					) ); 
				?>
			</nav>
		</div>
		<div class="column small-12 medium-8 footer__info">
			<p class="footer__copy">
				&copy; New Image College is a division of Global Model &amp; Talent Inc. <br>
				&copy; New Image College 2016. All rights reserved.
			</p>
		</div>
	</div>
</footer>

<div id="modal-advisor" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	<?php echo do_shortcode( '[contact-form-7 id="138" title="Form Advisor"]' ); ?>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>