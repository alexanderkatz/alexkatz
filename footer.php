<?php /** * The template for displaying the footer. * * Contains the closing of the #content div and all content after * * @package Tonal */ ?>

</div>
<!-- #content -->

<footer id="colophon" class="fullwidth-block site-footer" role="contentinfo">
	<div id="myFooter">
	</div>

	<!-- 	
 		<div class="site-info">
			<?php do_action( 'tonal_credits' ); ?>
			<?php printf( __( 'Forays in web development %s', 'tonal' ), '' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'tonal' ), 'tonal', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div> <!-- .site-info -->


</footer>
<!-- #colophon .fullwidth-block .site-footer -->

</div>
<!-- #page -->

<?php wp_footer(); ?>
<!--Load JQuery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	// wrap in onload function

	var headerHeight = $("header").css('height');
	headerHeight = parseInt(headerHeight) + 40;
	$("#main").css("paddingTop", (parseInt(headerHeight) + "px"));



	/*
	 * The following functions control the menu and sidebar
	 */

	// Hides sidebar if left open when closed
	$(window).resize(function () {
		if ($(".menu-menu-container").css("text-align") == 'right') {
			$(".menu-menu-container").css("left", "-100%");
		}
	});

	// Sidebar Click Function
	$("#toggle").click(function () {
		console.log("toggle clicked");
		var left = parseInt($('.menu-menu-container').css('left'));
		console.log(left);

		if (left >= 0) {
			hideSidebar();
		} else {
			showSidebar();
		}
	});

	// HIDE SIDEBAR
	function hideSidebar() {
		console.log("hide");
		$(".menu-menu-container").animate({
			left: "-100%",
		}, 200, 'linear');
	}
	// SHOW SIDEBAR
	function showSidebar() {
		console.log("showSidebar");
		// Gives the menu the correct top offset
		$(".menu-menu-container").css("top",$("#navwrapper").css('height'));
		$(".menu-menu-container").animate({
			left: "0%",
		}, 200, 'linear');
	}
</script>

</body>

</html>