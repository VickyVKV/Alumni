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
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
					<div class="color  <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>"></div>
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

