<?php
/***

	The Template for displaying all single posts.

***/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>


					<?php get_template_part( 'content', 'single' ); ?>
					
					<?php get_template_part( 'nav', 'posts-single' ); ?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>