<?php get_header(); ?>

<body id="mypage">


	
	
	<div id="choixdecontact" class="row ">
	
		<div class="col-12 align-self-center">
	

	
			<div class="row justify-content-around  justify-content-lg-end">
	
				<div class="seco col-9 col-lg-3 "><button type="button" class="btn btn-secondary" ><a href="#contacttout">Informations</a></button></div>
				<div class="sinc col-9 col-lg-3"><button type="button" class="btn btn-secondary" ><a  href="#nouscontacter">Nous contacter</a></button></div>
	
			</div>
	
	
	

	
	
		
	
	
	
	</div>	
	
	
</div>



<div id="contacttout">
	<main role="main">
		<!-- section -->
		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<div class="row ">
   				<!--social-->
		
		<div class="col-lg-12 col-12">
		
		
		
		
		
		
		
		<div class="row justify-content-center">
		
		
		<div class="col-12"><h1 class="h1contact"><?php the_title(); ?></h1></div>
		
		
			<div class="infos col-s-10 col-md-4 col-lg-3">
			
	
			<div class="soc back"></div>
			
			<div class="detailsinfos">
				
				<div class="row">
					
					<div class="contacttitre col-12"><h6>Social</h6></div>	
					
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-envelope"></i></div><div class="co col-10 col-lg-11">sara.shamoun@hotmail.com</div>
					
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-phone"></i></div><div class="co col-10 col-lg-11">0483 37 86 67</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-map-marker-alt"></i></div><div class="co col-10 col-lg-11">Rue du blablablabla n°4 <br> 1000 Bruxelles</div>
					
					
					
				</div>
				
				
				
			</div>
			
			</div>
		
		
			
		<!--technique-->
		
			<div class="infos col-s-10 col-md-4 col-lg-3">
			
	
			<div class="tech back"></div>
			
			<div class="detailsinfos">
				
				<div class="row">
					
					<div class="contacttitre col-12"><h6>Technique Graphique</h6></div>	
					<br>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-envelope"></i></div><div class="co col-10 col-lg-11">sara.shamoun@hotmail.com</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-phone"></i></div><div class="co col-10 col-lg-11">0483 37 86 67</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-map-marker-alt"></i></div><div class="co col-10 col-lg-11">Rue du blablablabla n°4 <br> 1000 Bruxelles</div>
					
					
					
				</div>
				
				
				
			</div>
			
			</div>
		
		
		<!--arts appliqués-->
		
			<div class="infos col-s-10 col-md-4 col-lg-3">
	
			<div class="app back"></div>
			
	
			<div class="detailsinfos">
				
				<div class="row">
					
					<div class="contacttitre col-12"><h6>Arts Appliqués</h6></div>	
					<br>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-envelope"></i></div><div class="co col-10 col-lg-11">sara.shamoun@hotmail.com</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-phone"></i></div><div class="co col-10 col-lg-11">0483 37 86 67</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-map-marker-alt"></i></div><div class="co col-10 col-lg-11">Rue du blablablabla n°4 <br> 1000 Bruxelles</div>
					
					
					
				</div>
				
				
				
				
			</div>
	
			</div>
			
			
			
			
			<!--économique-->
			
			
			<div class="infos col-s-10 col-md-4 col-lg-3">
			
			<div class="eco back"></div>
			
		
			<div class="detailsinfos">
				
				<div class="row">
					
					<div class="contacttitre col-12"><h6>Economique</h6></div>	
					<br>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-envelope"></i></div><div class="co col-10 col-lg-11">sara.shamoun@hotmail.com</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-phone"></i></div><div class="co col-10 col-lg-11">0483 37 86 67</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-map-marker-alt"></i></div><div class="co col-10 col-lg-11">Rue du blablablabla n°4 <br> 1000 Bruxelles</div>
					
					
					
				</div>
				
				
				
			</div>
	
			</div>
			
			
			
			
			<!--paramédical-->
			
			<div class="infos col-s-10 col-md-4 col-lg-3">
			
			<div class="para back"></div>

			<div class="detailsinfos">
				
				<div class="row">
					
					<div class="contacttitre col-12"><h6>Paramédical</h6></div>	
					<br>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-envelope"></i></div><div class="co col-10 col-lg-11">sara.shamoun@hotmail.com</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-phone"></i></div><div class="co col-10 col-lg-11">0483 37 86 67</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-map-marker-alt"></i></div><div class="co col-10 col-lg-11">Rue du blablablabla n°4 <br> 1000 Bruxelles</div>
					
					
					
				</div>
				
				
				
				
			</div>
	
			</div>
			
			
			
			<!--Pédagogique-->
			
			<div class="infos col-s-10 col-md-4 col-lg-3">
	
			
			<div class="peda back"></div>
			
			<div class="detailsinfos">
				
				
				<div class="row">
					
					<div class="contacttitre col-12"><h6>Pédagogique</h6></div>	
					<br>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-envelope"></i></div><div class="co col-10 col-lg-11">sara.shamoun@hotmail.com</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-phone"></i></div><div class="co col-10 col-lg-11">0483 37 86 67</div>
					
					<div class="cont col-1 col-lg-1"><i class="fas fa-map-marker-alt"></i></div><div class="co col-10 col-lg-11">Rue du blablablabla n°4 <br> 1000 Bruxelles</div>
					
					
					
				</div>
				
			</div>
	
			</div>	
				
			</div>
	
			</div>
          
			
       
          
                </div>
               
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	
</div>

<div id="nouscontacter" class="row">



    <div class="formulairedecontact col-lg-5 col-10 ">
			

		<div class="row justify-content-center">
			
			<div class="col-12 col-lg-9 align-self-center">
			<form>
			
			<h1 class="titrecontact">Formulaire de contact</h1>
			
			
			<article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
       
      		
       
       	 	</form>
       	 	
       	 	</div>
				
       	 </div>	
       	 	
       	
       	 	
    













</div>
</div>

</body>


<?php get_footer(); ?>