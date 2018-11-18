<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<div class="mb-5 container-fluid img-top-actu-detail"></div>	
		
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
			
			<div>
			<?php the_content(); // Dynamic Content ?>
			</div>
			</div>
				
			<div class="col-sm-5">
			<div class="info-prat-actu <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
			
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span><br>
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>

			<p><?php _e( 'Categorised in: <br>', 'html5blank' ); the_category(', '); // Separated by commas ?></p>	
			</div>
				
			<div>
			<h2 class="my-5">Plus d'actualités</h2>
			<?php query_posts('category_name=actualite&posts_per_page=1');
					 while ( have_posts() ) : the_post(); ?>
				<div class="actu-detail col-12 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
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

					</div><!--  news-content -->
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

<?php $catquery = new WP_Query( 'cat=12&posts_per_page=50' ); ?>
<ul>
 
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
 
<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile;
    wp_reset_postdata();
?>