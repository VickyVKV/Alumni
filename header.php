<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<body <?php body_class(); ?>>

		

			<!-- header -->
			<header class="header clear container" role="banner">

					<!-- logo -->
				<!--	<div class="logo">
						<a href="<?php echo home_url(); ?>">
							
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>-->
					<!-- /logo -->

					<!-- nav -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top nav" role="navigation">
					  <a class="navbar-brand" href="/alumni"><img src ="<?php echo get_template_directory_uri(); ?>/img/AlumniLogo.jpg"></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
				
					
						<?php html5blank_nav(); ?>
					 </div>
					</nav>
					<!-- /nav -->
					
					
					

			</header>