<footer id="footer" class="footer" role="contentinfo">
	<div class="row">
		<div class="column small-12 medium-4 column--info">
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

			<span class="footer__title">New Image College</span>
			<p>
				Local: (604) 685-8807 <br>
				Toll Free: +1 (866) 354-6243
			</p>
			<p>
				#1500-510 West Hastings Street <br>
				Vancouver, BC <br>
				V6G 1L8
			</p>
		</div>
		<div class="column small-12 medium-4 column--social">
			<section class="social-nav">
				<a href="#" target="_blank" title="Facebook" class="social__icon social__icon--facebook">Facebook</a>
				<a href="#" target="_blank" title="Instagram" class="social__icon social__icon--instagram">Instagram</a>
				<a href="#" target="_blank" title="Twitter" class="social__icon social__icon--twitter">Twitter</a>
				<a href="#" target="_blank" title="Google+" class="social__icon social__icon--google">Google+</a>
				<a href="#" target="_blank" title="Youtube" class="social__icon social__icon--youtube">Youtube</a>
			</section>
			<a href="#" class="button success">Talk to a Program Advisor</a>
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
	</div>
	<div class="row">
		<div class="column small-12 footer__info">
			<p class="footer__copy">&copy; 2016 New Image College of Fine Arts. All rights reserved</p>
		</div>
	</div>
</footer>