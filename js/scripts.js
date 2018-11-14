jQuery(document).ready(function($){
	
	//alert("ok");
	console.log('ok');
	
	
/* CAROUSEL */
	// mettre une classe active sur le premier élément du Carousel sinon il ne fonctionne pas
	$(".carousel-item").first().addClass("active");
	$(".carousel-indicators li").first().addClass("active");




/*   FILTRE NEWS   */

$('.button, .button2').css("cursor","pointer");


	$('.article').hide();
	//$('.ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)').show();
	$(".ct-news .article").slice(0, 6).show();
	$(".ct-events .article").slice(0, 6).show();
	$(".ct-galerie .article").slice(0, 6).show();
	


	$(".button").click(function(){
		
		var value = $(this).attr("data-filter");
		//console.log(value);

			if (value == "article")
		{
			
			$(".article").hide();
	
			
			//$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").fadeIn("5000");
			//$(this).filter("."+value).removeClass("active");
			$(".ct-news .article").slice(0, 6).fadeIn("1000");
			$(".ct-events .article").slice(0, 6).fadeIn("1000");
			$(".ct-galerie .article").slice(0, 6).fadeIn("1000");
		}
		else{
			$(".article").not("."+value).hide();
			//$(".article").fadeOut("5000");
			
			//$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").filter("."+value).fadeIn("5000");
			//$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).fadeOut().slice(0, 3).fadeIn();
			//$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).hide();
			
			//$(this).filter("."+value).addClass("active");
			
			
			//$(".article").filter("."+value).fadeIn("5000");
			$(".ct-news .article").filter("."+value).slice(0, 6).fadeIn("1000");
			$(".ct-events .article").filter("."+value).slice(0, 6).fadeIn("1000");
			$(".ct-galerie .article").filter("."+value).slice(0, 6).fadeIn("1000");
			
		}


		
		}); // click .button
		
		
		
			$(".button2").click(function(){
		
		var value = $(this).attr("data-filter");
		//console.log(value);

			if (value == "article")
		{
			
			$(".article").hide();
	
			
			//$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").fadeIn("5000");
			//$(this).filter("."+value).removeClass("active");
			$(".ct-news .article").slice(0, 6).fadeIn("1000");
			$(".ct-events .article").slice(0, 6).fadeIn("1000");
			$(".ct-galerie .article").slice(0, 6).fadeIn("1000");
		}
		else{
			$(".article").not("."+value).hide();
			//$(".article").fadeOut("5000");
			
			//$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").filter("."+value).fadeIn("5000");
			//$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).fadeOut().slice(0, 3).fadeIn();
			//$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).hide();
			
			//$(this).filter("."+value).addClass("active");
			
			
			//$(".article").filter("."+value).fadeIn("5000");
			$(".ct-news .article").filter("."+value).slice(0, 6).fadeIn("1000");
			$(".ct-events .article").filter("."+value).slice(0, 6).fadeIn("1000");
			$(".ct-galerie .article").filter("."+value).slice(0, 6).fadeIn("1000");
			
		}


		
		}); // click .button
		
		

$( ".article" ).mouseenter(function() {
 $( this ).animate( {
  top: "-=10px"
  
  } );
});

$( ".article" ).mouseleave(function() {
 $( this ).animate( {
  top: "+=10px"
  
  } );
});

//$('.ct-news').load("http://alumni.techniques-graphiques.be/wp-content/themes/Alumni-Ferrer/_news.php");		
		
	
});




