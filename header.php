<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // end analytics ?>
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108402685-1"></script>


			<!-- COMMENTED OUT FOR DEVELOPMENT. UNCOMMENT IN PRODUCTION -->
			<!-- <script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-108402685-1');
			</script> -->


	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">





 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	 <div class="container eg-top">
		 <div class="navbar-header">
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				 <span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			 </button>

			 <!-- <p id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/MonarchLogoVectorPurple.svg" alt="<?php bloginfo('name'); ?>" /></a></p> -->
			 <p id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/Monarch_Logo.png" alt="<?php bloginfo('name'); ?>" /></a></p>

		 </div>
		 <div class="collapse navbar-collapse">
			 <ul class="nav navbar-nav pull-right">
				 <?php wp_nav_menu(array(
     					         'container' => false,                           // remove nav container
     					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
     					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
     					         'menu_class' => 'nav top-nav cf nav-li',               // adding custom nav class
     					         'theme_location' => 'main-nav',                 // where it's located in the theme
     					         'before' => '',                                 // before the menu
         			               'after' => '',                                  // after the menu
         			               'link_before' => '',                            // before each link
         			               'link_after' => '',                             // after each link
         			               'depth' => 0,                                   // limit the depth of the nav
     					         'fallback_cb' => '',
										));
					?>




			 </ul>
		 </div><!--/.nav-collapse -->
</div><!--/.container -->
</div><!-- close whole nav bar -->
<div class="spacer" style="width:100%; height:80px;"></div>
