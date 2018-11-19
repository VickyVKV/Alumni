		<div class="row news">
			<div class="col-12 my-5"><h2>Actualités</h2>
			</div>
			
			<?php query_posts('category_name=actualite');
					 while ( have_posts() ) : the_post(); ?>
				<div class="actu article col-md-6 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="hashtags <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					
					<?php foreach((get_the_category()) as $category) {
					
					if($category->slug  != "actualite" && $category->slug  != "evenement" && $category->slug  != "slider") {
					
					echo '<a  class="button2 '.$category->slug.'"  data-filter="'.$category->slug.'">' . $category->slug . '</a> '; 
					
					}
					
					} ?>
					</div><!-- hashtags -->

					<div class="p-3 news-content">	
						
					<!-- post title -->
					<h3>
						<a class="titre-actu" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h3>
					<!-- /post title -->

					<!-- post details -->
					<span class="date">Publié le <?php the_date(); ?> <?php the_time('g:i a'); ?></span>
					<!--<span class="author"><?php _e( 'Published by', 'html5blank' ); ?><?php the_author_posts_link(); ?></span>-->
					<!--<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>-->
					<!-- /post details -->

					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					<?php //edit_post_link(); ?>
					</div><!--  news-content -->
				</article>
				</div>
				<!-- /article -->

			  <?php endwhile;
	wp_reset_query();?>

			<?php //get_template_part('pagination'); ?>
			</div><!-- Row news -->