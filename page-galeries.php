<?php get_header(); ?>

	<main role="main">
	<h2 class="col-12"> Galeries</h2>
<div class="row filter">
						<div id="accueil" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="article"><a>Tout</a></div>
						<div id="art" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="arts-appliques"><a>Arts appliqués</a></div>
						<div id="eco" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="economique-cooremans"><a>Economie</a></div>
						<div id="para" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="paramedical"><a>Paramédicale</a></div>
						<div  id="peda" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
						<div id="social" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="social-cooremans"><a>Social</a></div>
						<div id="tech" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="technique"><a>Technique</a></div>
					</div>
					<br>
		<section class="container ct-galerie">
			<div class="row">
			<?php query_posts('category_name=galerie');
					 while ( have_posts() ) : the_post(); ?>
				<div class="article col-lg-3 col-md-6 col-sm-12 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hovereffect">

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(150,150)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<div class="overlay <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					<h3>
						<a class="info" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h3>
					<!-- /post title -->
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

				</article>
				</div>
				<!-- /article -->

			  <?php endwhile;
	wp_reset_query();?>

			<?php //get_template_part('pagination'); ?>
			</div> <!-- Row news -->
        </div>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>




