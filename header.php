<?php /** * The Header for our theme. * * Displays all of the <head>section and everything up till
<div id="content">
	* * @package Tonal */ ?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php wp_title( '|', true, 'right' ); ?>
		</title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<?php do_action( 'before' ); ?>
			<header class="t-wrapper" id="navwrapper">
				<div class="t-cell" id="logo">
				</div>
				<div class="t-cell" id="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<div class="t-cell">
					<?php get_sidebar(); ?>
				</div>
				<!-- #menu-block-->
			</header>
			
<!-- #masthead .site-header -->

<div id="content" class="site-content">
