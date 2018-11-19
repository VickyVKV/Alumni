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
                
                <div class="row">
			<div class="col-12 my-5"><h2>Evenements</h2>
			</div></div>        
                
			<div class="row justify-content-center">
				<?php query_posts('category_name=evenement');
					 while ( have_posts() ) : the_post(); ?>
					<div class="article col-10 col-lg-5 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					<!-- article -->
                        
                        
                        <div class="color">
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

			</div> <!-- Row events -->
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
