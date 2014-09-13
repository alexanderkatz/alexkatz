<?php
/*
 * Template Name: Portfolio Page
 * Description: A Page Template for portfolio items.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="container-fluid portfolio">
				<div class="col-md-4">
					<!--Display Text-->
					<div class="summary">
<!--< ?php get_template_part( 'content', 'page' ); ?>-->
					<?php $page_data = get_page( $page_id ) ?>
					<!--echo the title then content-->
					<?php echo '<h1>'. $page_data->post_title .'</h1>';?>
					<?php echo apply_filters('the_content', $page_data->post_content); ?>	
					
					<!--VISIT SITE-->
					<!-- echo single value of key url -->
					<a class="visitsite" href="<?php echo get_post_meta($post->ID, 'url', true); ?>">Visit Site</a>
					

	
				</div>
				</div>
				<div class="col-md-8">
				<section class="desktop">
					<div class="desktop-top">
						<div id="circles">
							<div id="c1" class="circle"></div>
							<div id="c2" class="circle"></div>
							<div id="c3" class="circle"></div>
						</div>
					</div>
					<?php the_post_thumbnail(); ?>
					<!--Get Image-->
				</section>
				</div>
			</div>
			
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main .site-main -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>
