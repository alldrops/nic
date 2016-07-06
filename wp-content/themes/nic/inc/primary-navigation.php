<nav class="social-nav">
	<ul>
		<li><a href="https://www.facebook.com/RioBrazilianSteakhouse" target="_blank" class="social-nav__icon social-nav__facebook"></a></li>
		<li><a href="https://instagram.com/riobraziliansteakhouse/" target="_blank" class="social-nav__icon social-nav__instagram"></a></li>
		<li><a href="https://twitter.com/riovancouver" target="_blank" class="social-nav__icon social-nav__twitter"></a></li>
	</ul>
</nav>
<nav class="main-nav">
	<?php 
		wp_nav_menu( array(
		    'theme_location' => 'main-nav',
		    'container' => false,
		    'menu_class' => '',
		    'menu_id' => ''
		) ); 
	?>
</nav>