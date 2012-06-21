<?php 
/**
 * The template used for displaying the Navigation links for SINGLE POST
 */

?>

<nav id="nav-single" class="post-navigation">
	<h3 class="assistive-text">Post navigation</h3>
	<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'startertheme' ) ); ?></span>
	<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'startertheme' ) ); ?></span>
</nav><!-- #nav-single -->