<?php /* Template Name: Template - Programs */ ?>

<?php include("header.php"); ?>

<style>
	html, body {
		overflow-x: initial;
	}
</style>

<?php while ( have_posts() ) : the_post(); ?>

	<?php include("inc/top-banner.php") ?>

	<div class="page-content">
		<section class="row">
			<h1 class="page-title">Programs</h1>
		</section>

		<?php include("inc/flexible-content.php") ?>

		<section class="category-container">
			<div class="row">
				<?php
					//list terms in a given taxonomy
					$taxonomy = 'department';
					$tax_terms = get_terms($taxonomy);
					global $query_string;

					query_posts( $query_string . '&posts_per_page=99&orderby=menu_order' );
				?>
				<style>
					
				<?php
					foreach ($tax_terms as $tax_term) {
						$termID = $tax_term->term_id;
				    	$termSlug = $tax_term->slug;
				    	$colour = '#' . get_term_meta( $termID, 'color', true );

						if ($termSlug != 'international-education') : ?>
							.program--<?php echo $termSlug; ?>:before {
								background: <?php echo $colour; ?>;
							}
						<?php endif;
					}
				?>
				</style>
				<?php
					foreach ($tax_terms as $tax_term) {

						$termID = $tax_term->term_id;
				    	$termName = $tax_term->name;
				    	$termLink = get_term_link($termID);
				    	$termSlug = $tax_term->slug;
				    	$colour = '#' . get_term_meta( $termID, 'color', true );
				    	$termImage = category_image_src( array('term_id'=>$termID) , false );

						if ($termSlug != 'international-education') :
							echo '<a href="'.$termLink.'" data-program="program--'.$termSlug.'" class="box-bg program--'.$termSlug.'" style="background: url('.$termImage.') no-repeat center center; background-size: cover"><span class="program__cat">'.$termName.'</span></a>';
						endif;
					}
				?>

				<?php wp_reset_query(); ?>
			</div>
		</section>

		<span class="categories-separator arrow-separator"></span>

		<section class="section-programs section-programs--programs">
			<div class="programs-container">
				<div class="programs-row">
					<a href="/nic/programs/film-acting/acting-101/" class="box-bg hex program--film-acting">
						<span class="program__cat">Acting 101</span>
					</a>
					<a href="/nic/programs/film-prosthetic-makeup/fashion-and-film-makeup-design/" class="box-bg hex program--film-prosthetic-makeup">
						<span class="program__cat">Fashion and Film Makeup Design</span>
					</a>
					<a href="/nic/programs/high-fashion-beauty-makeup/beauty-design/" class="box-bg hex program--high-fashion-beauty-makeup">
						<span class="program__cat">Beauty Design</span>
					</a>
				</div>
				<div class="programs-row programs-row--even">
					<a href="/nic/programs/hair-styling-design/hair-styling-and-design/" class="box-bg hex program--hair-styling-design">
						<span class="program__cat">Hair Styling and Design</span>
					</a>
					<a href="/nic/programs/high-fashion-beauty-makeup/avant-garde-makeup-design/" class="box-bg hex program--high-fashion-beauty-makeup">
						<span class="program__cat">Avant Garde Makeup Design</span>
					</a>
					<a href="/nic/programs/medical-esthetics/advanced-spa-technician/" class="box-bg hex program--medical-esthetics">
						<span class="program__cat">Advanced Spa Technician</span>
					</a>
					<a href="/nic/programs/film-acting/film-acting-intermediate/" class="box-bg hex program--film-acting">
						<span class="program__cat">Film Acting Intermediate</span>
					</a>
				</div>
				<div class="programs-row">
					<a href="/nic/programs/nail-art-design/nail-technician/" class="box-bg hex program--nail-art-design">
						<span class="program__cat">Nail Technician</span>
					</a>
					<a href="#" class="box-bg hex program--nic">
						<span class="program__cat"><img src="<?php echo get_template_directory_uri(); ?>/images/nic_white.svg" alt=""></span>
					</a>
					<a href="/nic/programs/teen-career-jumpstart/teen-acting/" class="box-bg hex program--teen-career-jumpstart">
						<span class="program__cat">Teen Acting</span>
					</a>
				</div>
				<div class="programs-row programs-row--even">
					<a href="/nic/programs/teen-career-jumpstart/teen-makeup/" class="box-bg hex program--teen-career-jumpstart">
						<span class="program__cat">Teen Makeup</span>
					</a>
					<a href="/nic/programs/film-acting/film-acting-advanced/" class="box-bg hex program--film-acting">
						<span class="program__cat">Film Acting Advanced</span>
					</a>
					<a href="/nic/programs/film-prosthetic-makeup/cutting-edge-advanced-prosthetics/" class="box-bg hex program--film-prosthetic-makeup">
						<span class="program__cat">Cutting Edge Advanced Prosthetics</span>
					</a>
					<a href="/nic/programs/high-fashion-beauty-makeup/fashion-film-makeup-design/" class="box-bg hex program--high-fashion-beauty-makeup">
						<span class="program__cat">Fashion and Film Makeup Design</span>
					</a>
				</div>
				<div class="programs-row">
					<a href="/nic/programs/high-fashion-beauty-makeup/beauty-makeup-artist/" class="box-bg hex program--high-fashion-beauty-makeup">
						<span class="program__cat">Beauty Makeup Artist</span>
					</a>
					<a href="/nic/programs/esthetics-cosmethology/spa-technician/" class="box-bg hex program--esthetics-cosmethology">
						<span class="program__cat">Spa Technician</span>
					</a>
					<a href="/nic/programs/teen-career-jumpstart/teen-spa/" class="box-bg hex program--teen-career-jumpstart">
						<span class="program__cat">Teen Spa</span>
					</a>
				</div>
			</div>
		</section>

		<?php include("inc/riverflow.php") ?>

	</div>

<?php endwhile; ?>

<?php include("footer.php"); ?>
