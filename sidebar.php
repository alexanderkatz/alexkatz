<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Tonal
 */
?>
	<nav role="navigation">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tonal' ); ?></a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation .main-navigation -->

	