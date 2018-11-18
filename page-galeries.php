<?php get_header(); ?>

	<main role="main">
<div class="row filter">
						<div id="accueil" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="article"><a>Tout</a></div>
						<div id="art" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="arts-appliques"><a>Arts appliqués</a></div>
						<div id="eco" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="economique-cooremans"><a>Economie</a></div>
						<div id="para" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="paramedical"><a>Paramédicale</a></div>
						<div  id="peda" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
						<div id="social" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="social-cooremans"><a>Social</a></div>
						<div id="tech" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="technique"><a>Technique</a></div>
					</div>
					
		<section class="container ct-galerie">
			<div class="row">
			<h2> Galerie </h2>
				<?php query_posts('category_name=galerie');
					 while ( have_posts() ) : the_post(); ?>
					<div class="article col-3">
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php // post_class(); ?> class="<?php 
																						  foreach((get_the_category()) as $category) { 
																							echo $category->slug . ' '; 
																							} 	

																						   		?>">

						<hr>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
						<!-- /post title -->

						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>


					</article>
					</div>
					<!-- /article -->

			  <?php endwhile;
				wp_reset_query();?>

			</div> <!-- Row events -->
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
