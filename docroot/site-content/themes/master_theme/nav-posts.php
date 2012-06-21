<?php 
/**
 * The template used for displaying the Navigation links for POSTS
 */

?>
<nav class="post-navigation">

	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="nav-below">
			<h3 class="assistive-text">Post navigation</h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif; ?>
	
</nav>