<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php the_title(); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png?v=1" rel="shortcut icon">
   <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77219320-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-77219320-2');
	</script>
	<script src="https://kit.fontawesome.com/34b9d94a02.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?> >
<div class="wrapper">
	<!-- ADD A PRE-LOADEDER -->
	<!-- <div id="preloader">
		<img src="<?php echo get_template_directory_uri();?>/img/preloader.svg" >
	</div> -->
	<header class="header" role="banner">
		<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
		<div class="content header-inner-wrap">
			<nav class="main-nav mainNav" role="navigation">
				<ul>
				</ul>
			</nav>
			<div class="mobile-menu menuToggle">
				<span class="hamTop"></span>
				<span class="hamMid"></span>
				<span class="hamBot"></span>
			</div>
		</div>
	</header>
	<?php get_template_part( 'partials/_svg-back-and-filters' ); ?>
