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
			/*$(".article").not("."+value).hide();*/
			$(".article").hide();
			//$(".article").fadeOut("5000");
			
			$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").filter("."+value).fadeIn("5000");
			$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).fadeOut().slice(0, 3).fadeIn();
			$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).hide();
			
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
		
		



//$('.ct-news').load("http://alumni.techniques-graphiques.be/wp-content/themes/Alumni-Ferrer/_news.php");

$("#tech").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-technique:odd").addClass("odd");	
	$(".hashtags.technique").removeClass("odd");
});	
$("#para").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-paramedical:odd").addClass("odd");	
	$(".hashtags.paramedical").removeClass("odd");
});
$("#social").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-social-cooremans:odd").addClass("odd");	
	$(".hashtags.social-cooremans").removeClass("odd");
});	
$("#peda").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-pedagogique-bulls:odd").addClass("odd");	
	$(".hashtags.pedagogique-bulls").removeClass("odd");
});	
$("#eco").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-economique-cooremans:odd").addClass("odd");	
	$(".hashtags.economique-cooremans").removeClass("odd");
});	
$("#art").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-arts-appliques:odd").addClass("odd");	
	$(".hashtags.arts-appliques").removeClass("odd");
});	
$("#accueil").click(function(){
	$(".actualite").removeClass("odd");
	$(".odd-actualite:odd").addClass("odd");	
	$(".hashtags.technique").removeClass("odd");
});	
	$(".actualite").removeClass("odd");
	$(".odd-actualite:odd").addClass("odd");	
	$(".hashtags.technique").removeClass("odd");	

});

