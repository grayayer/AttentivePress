<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<style type="text/css">@import url("<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css");</style>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />
		<!-- stylesheet switcher -->
        <?php
            // Checks for, and assigns cookie to local variable:
            if(!empty($_COOKIE['style'])) $style = $_COOKIE['style'];
            // If no cookie is present then set style as "corporate" (default):
            else $style = 'corporate';
        ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/<?php echo $style ?>.css" />
		<!-- end of stylesheet switcher -->

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		<!-- fonts 
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
		<!--<script src="//use.typekit.net/ant3dpu.js"></script> 
		<script>try{Typekit.load();}catch(e){}</script>
		nimbus font through typekit -->

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action('foundationPress_layout_start'); ?>
	
	<!--the mobile header display -->
	<nav class="tab-bar show-for-small-only">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
		</section>
		<section class="right-small">
			<a href="#" role="button" class="right-off-canvas-toggle menu-icon" ><span></span></a>
		</section>		
	</nav>



	<?php get_template_part('parts/off-canvas-left'); ?>
	<?php  get_template_part('parts/off-canvas-right-common'); ?>
	<?php get_template_part('parts/top-bar'); ?>



<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>