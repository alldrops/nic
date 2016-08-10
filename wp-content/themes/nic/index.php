<?php /* Template Name: Template - Home */ ?>

<?php include("header.php"); ?>

		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<div class="page-content">
			<div class="row">
				<section class="section-programs section-programs--home">
					<h2 class="page-title">Programs</h2>
					<div class="programs-container">
						<div class="programs-row">
							<a href="/nic/programs" class="box-bg hex program--film-acting"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/acting-6.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Film Acting</span>
							</a>
							<a href="/nic/programs" class="box-bg hex program--film-prosthetic-makeup"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/makeup-3.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Film<br> &amp; <br>Prosthetic Makeup</span>
							</a>
							<a href="/nic/programs" class="box-bg hex program--high-fashion-beauty-makeup"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/makeup-15.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">High Fashion<br> &amp; <br>Beauty Makeup</span>
							</a>
						</div>
						<div class="programs-row programs-row--even">
							<a href="/nic/programs" class="box-bg hex program--esthetics-cosmethology"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/spa-1.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Esthetics<br> &amp; <br>Cosmethology</span>
							</a>
							<a href="/nic/programs" class="box-bg hex program--medical-esthetics"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/spa-6.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Medical Esthetics</span>
							</a>
						</div>
						<div class="programs-row">
							<a href="/nic/programs" class="box-bg hex program--nail-art-design"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/spa-3.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Nail Art<br> &amp; <br>Design</span>
							</a>
							<a href="/nic/programs" class="box-bg hex program--hair-styling-design"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/hair-1.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Hair Styling<br> &amp; <br>Design</span>
							</a>
							<a href="/nic/programs" class="box-bg hex program--teen-career-jumpstart"
							style="background: url('http://localhost:3000/nic/wp-content/uploads/2016/08/teen-5.jpg') no-repeat center center; background-size: cover">
								<span class="program__cat">Teen Career Jumpstart</span>
							</a>
						</div>
					</div>
				</section>
			</div>
		</div>

		<?php include("inc/banner-campus.php") ?>

		<?php include("inc/riverflow.php") ?>

	<?php endwhile; ?>

<?php include("footer.php"); ?>
