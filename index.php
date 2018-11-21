<?php get_header(); ?>

		<main role="main">
		<div class="container-fluid img-top-accueil">
			<div class="row">
				<div class="col-12 img-titre-accueil">
					<h1>Alumni</h1>
				</div>
			</div>
		</div>
            
            <div class="container bienvenue"> 
            <div class="row">
                <div class="col-lg-6 col-sm-12 ">
					<h1>Bienvenue</h1><h1 class="titre-decale"> sur Alumni Ferrer</h1></div>
               <div class="text-bienvenu col-lg-6 col-sm-12"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta ligula. Maecenas vehicula eleifend pretium. Sed ultrices lacus eget lacus interdum, sed maximus ipsum tristique. In sit amet ante et enim efficitur consectetur vel vel ipsum. Aenean eleifend mi ligula, sit amet feugiat quam accumsan at. Sed in tincidunt nulla, non gravida metus. Aenean vitae mauris faucibus, pulvinar sapien nec, blandit nunc. Sed pulvinar arcu at purus bibendum porttitor.</p>
                </div>
                </div>
            </div>
            

            
			<!-- SLIDER -->
		<section id="slider" class="container-fluid">

		
<div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">					
 <?php 
   $number = 0;
?>
<ol class="carousel-indicators">

    <?php query_posts('category_name=slider');
	while(have_posts()): the_post(); ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $number++; ?>"></li>
      <?php endwhile; ?>
</ol>
				
<div class="carousel-inner ">
	
	<?php query_posts('category_name=slider');
         while ( have_posts() ) : the_post(); ?>
    <div class="carousel-item">
	
	<a href="<?php echo get_permalink(); ?>">
      <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' );?>
<div class="carousel-caption d-none d-sm-block">
    <h5><?php the_title(); ?></h5>
    <p><?php //the_excerpt(); ?></p>
	<!--<p> <?php 
foreach((get_the_category()) as $cat) { 
echo $cat->cat_name . ' '; 
} ?> </p>-->
  </div>
		</a>

    </div>
  <?php endwhile;
	wp_reset_query();?>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
				
         
  		</section>
		<!-- / SLIDER -->
		
		<!-- section news -->
		<section class="container ct-news">
		
		<div class="row news">
			
			<div class="row filter mt-5">
			<div id="accueil" class="button col-lg-1 col-md-12 col-12 text-center" data-filter="article"><a>Tout</a></div>
			<div id="art" class="button col-lg-2 col-md-6 col-12 text-center" data-filter="arts-appliques"><a>Arts appliqués</a></div>
			<div id="eco" class="button col-lg-2 col-md-6 col-12 text-center" data-filter="economique-cooremans"><a>Economie</a></div>
			<div id="para" class="button col-lg-2 col-md-6 col-12 text-center" data-filter="paramedical"><a>Paramédicale</a></div>
			<div  id="peda" class="button col-lg-2 col-md-6 col-12 text-center" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
			<div id="social" class="button col-lg-1 col-md-6 col-12 text-center" data-filter="social-cooremans"><a>Social</a></div>
			<div id="tech" class="button col-lg-2 col-md-6 col-12 text-center" data-filter="technique"><a>Technique</a></div>
		</div>
			
			<div class="col-12 mt-5"><h2>Actualités</h2>
			</div>
			
			<?php query_posts('category_name=actualite');
					 while ( have_posts() ) : the_post(); ?>
				<div class="actu article col-lg-6 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?><?php foreach((get_the_category()) as $category) { echo 'odd-'.$category->slug . ' '; } ?>">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="hashtags <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					
					<?php foreach((get_the_category()) as $category) {
					
					if($category->slug  != "actualite" && $category->slug  != "evenement" && $category->slug  != "slider") {
					
					echo '<div  class=" '.$category->slug.'"  data-filter="'.$category->slug.'">' . $category->slug . '</div> '; 
					
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
			
		</section>
		<!-- /section news -->
		
		
		<!-- section events -->
		<section class="container ct-events">
                
                <div class="row">
			<div class="col-12 mt-5"><h2>Evenements</h2>
			</div></div>        
                
			<div class="row justify-content-center">
				<?php query_posts('category_name=evenement');
					 while ( have_posts() ) : the_post(); ?>
					<div class="article text-center col-10 col-lg-5 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
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
		<section class="container ct-galerie mt-5">
		<div class="row">
			<h2 class="col-12 "> Galerie</h2>
			<?php $my_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'galerie'));?>
              
               <!--Pour ne garder que les evenements, il faut aussi modifier la boucle en faisant appel à la variable créée juste avant-->
               <?php if ($my_posts->have_posts()) : while ($my_posts->have_posts() ) : $my_posts->the_post(); ?>
				<div class="article col-lg-3 col-md-6 col-sm-12 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hovereffect">

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php the_post_thumbnail(array(150,150)); // Declare pixel size you need inside the array ?>
					
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

			  <?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?><!--Fin du loop pour les posts-->

			<?php //get_template_part('pagination'); ?>
			</div> <!-- Row news -->
        </div>
    </div>
</div>


		</section>
		<!-- /section galerie -->
	</main>




<?php get_footer(); ?>
