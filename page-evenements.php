<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid img-top-event">
			<div class="row">
				<div class="col-12 img-titre-event">
					<h1>Evénements</h1>
				</div>
			</div>
		</div>
		<!-- /section --> 
            
            <section class="container ct-events">
                
                <div class="row">
			<div class="col-12 my-5"><h2>Evenements</h2>
			</div></div>
                
                
                           <div class="row filter">
						<div id="accueil" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="article"><a>Tout</a></div>
						<div id="art" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="arts-appliques"><a>Arts appliqués</a></div>
						<div id="eco" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="economique-cooremans"><a>Economie</a></div>
						<div id="para" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="paramedical"><a>Paramédicale</a></div>
						<div  id="peda" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
						<div id="social" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="social-cooremans"><a>Social</a></div>
						<div id="tech" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="technique"><a>Technique</a></div>
            </div>
                
                
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
            
        


	</main>