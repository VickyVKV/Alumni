
<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
<div class="mb-5 container-fluid img-top-event-detail"></div>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="row">

			<!-- post title -->
			<div class="col-7">
			<h1 class="mb-3">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

            
            			<!-- post thumbnail -->
			
                <div class="thumbnail-event"><?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
                    <?php endif; ?></div>
			<!-- /post thumbnail -->
            

			<div>
			<?php the_content(); // Dynamic Content ?>
			</div>
            </div>

					<div class="col-sm-5">
			<div class="info-prat-actu <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
			
			<span class="author"><?php _e( 'Publié par', 'html5blank' ); ?> <?php the_author(); ?></span><br>
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>

			<?php /*?><p><?php _e( 'Categorised in: <br>', 'html5blank' ); the_category(', '); // Separated by commas ?></p>	<?php */?>
			</div>
				
			<div class="plus-event">
			<h2 class="my-5">Plus d'évenements</h2>
			<?php query_posts('category_name=evenement&posts_per_page=1');
				 while ( have_posts() ) : the_post(); ?>
					<div class="article-event text-center col-10 col-lg-5 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					<!-- article -->
                        
                        
                        <div class="<?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?> color-detail">
                        </div>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->
						
				    
					</article>
                 
					</div>
					<!-- /article -->

			  <?php endwhile;
				wp_reset_query();?>

			</div>
			</div>
			
			</div>	
				
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

	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>


