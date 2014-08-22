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
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<?php do_action( 'before' ); ?>

			<div id="menu-block">
				<?php get_sidebar(); ?>
			</div>
			<!-- #menu-block-->

			<header id="masthead" role="banner">

				<div id="menu-nav" class="button-block"></div>

				<?php if ( get_header_image() ) { ?>
				<div id="site-header">
					<div class="site-branding site-headerfix">
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</h1>
						<h2 class="site-description">
							<?php bloginfo( 'description' ); ?>
						</h2>
					</div>
					<!-- .site-branding -->
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				</div>
				<!-- .site-header -->
				<?php } else { ?>
				<div class="site-branding">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							
							<div id="myheader">
								<div id="myheader-text">
									<h1>
										<span id="t1">Forays in</span>
										<span id="t2">Web</span>
										<span id="t3">Development</span>
									</h1>
				</div>
				<div id="compIcon">
					<img src="http://alexkatz.me/images/computer.png" width="146">
				</div>
		</div>
		</a>
		</h1>
</div>
<!-- .site-branding -->
<?php } ?>
</header>
<!-- #masthead .site-header -->

<div id="content" class="site-content">
