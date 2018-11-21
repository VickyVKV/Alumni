<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="text-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			
			<?php endif; ?>

			<!-- /post thumbnail -->
<div class="container">
			<!-- post title -->
			<h1 class="mt-5">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->
			

			<?php the_content(); // Dynamic Content ?>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
</div>
	</section>
	<!-- /section -->
	</main>

<?php /*?><?php get_sidebar(); ?><?php */?>

<?php get_footer(); ?>
