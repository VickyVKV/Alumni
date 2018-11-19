<?php get_header(); ?>

	<main role="main">
			<!-- SLIDER -->
		<section id="slider" class="container-fluid">

		<?php include("_slider.php"); ?>
  		</section>
		<!-- / SLIDER -->
		
		<!-- section news -->
		<section class="container ct-news">
		
			<?php  include("_news.php"); ?>
			
		</section>
		<!-- /section news -->
		
		
		<!-- section events -->
		<section class="container ct-events">
			<?php include("_events.php"); ?>
		</section>
		<!-- /section events -->
		
		<!-- section Galerie -->
		<section class="container ct-galerie">
		<?php include("_galerie.php"); ?>
		</section>
		<!-- /section galerie -->
	</main>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
