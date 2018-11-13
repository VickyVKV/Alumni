<div class="row">
			<h2 class="col-12"> Events</h2>
				<?php query_posts('category_name=evenement');
					 while ( have_posts() ) : the_post(); ?>
					<div class="article col-lg-3 col-md-6 col-sm-12 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
						<!-- /post title -->




						<p><?php
						
						
						
						// dans interface mettre la date au format U --> unix timestamp http://php.net/manual/fr/function.date.php 
						
						// format date Y m d h:i
						
					
						
						$originalStartDate = get_the_date_start();
						$originalEndDate = get_the_date_end();

						
						$dayStartDate = date('d/m/Y', $originalStartDate);
						$dayEndDate = date('d/m/Y', $originalEndDate);
						
						$timeStartDate = date('h:i', $originalStartDate);
						$timeEndDate = date('h:i', $originalEndDate);

						
						
						if ($dayStartDate == $dayEndDate) :
						
						echo 'Le ' . $dayStartDate .' à ' . $timeStartDate  ;
						
						elseif ($dayStartDate != $dayEndDate) :
						
						echo 'Du ' . $dayStartDate .' à '. $timeStartDate .' au '. $dayEndDate . ' à ' . $timeEndDate;
						
						endif;
						
						
						// OK
						//echo date('m/d/Y', $originalStartDate);
		
							
							
							?></p>
						<p><?php 
							
							/*if($dateEnd != $dateStart)
							echo 'Au: ' . $dateEnd; */?></p>
			

						<?php edit_post_link(); ?>

					</article>
					</div>
					<!-- /article -->

			  <?php endwhile;
				wp_reset_query();?>

			</div> <!-- Row events -->