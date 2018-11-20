<?php get_header(); ?>

	<main role="main">
		<div class="container-fluid img-top-galerie">
			<div class="row">
				<div class="col-12 img-titre-galerie">
					<h1>Galeries</h1>
				</div>
			</div>
		</div>
	<div class="col-12 img-titre-galerie">
	<h2 class="col-12"> Galeries</h2>

		<section class="container ct-galerie">
		<section class="container">
		<br>
		<div class="row filter">
			<div id="accueil" class="button col-lg-1 col-md-12 col-sm-12 text-center" data-filter="article"><a>Tout</a></div>
			<div id="art" class="button  col-lg-2 col-md-6 col-sm-12 text-center" data-filter="arts-appliques"><a>Arts appliqués</a></div>
			<div id="eco" class="button  col-lg-2 col-md-6 col-sm-12 text-center" data-filter="economique-cooremans"><a>Economie</a></div>
			<div id="para" class="button  col-lg-2 col-md-6 col-sm-12 text-center" data-filter="paramedical"><a>Paramédicale</a></div>
			<div  id="peda" class="button  col-lg-2 col-md-6 col-sm-12 text-center" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
			<div id="social" class="button  col-lg-1 col-md-6 col-sm-12 text-center" data-filter="social-cooremans"><a>Social</a></div>
			<div id="tech" class="button col-lg-2 col-md-6 col-sm-12 text-center" data-filter="technique"><a>Technique</a></div>
		</div>
					<br>
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
					<div class="color-galerie  <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>"></div>
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

<?php get_footer(); ?>




