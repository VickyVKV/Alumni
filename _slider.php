
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
				
         
  