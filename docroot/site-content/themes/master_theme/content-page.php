<?php
/***

	The template used for displaying page content in page.php

***/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ) {
		?>
		<figure class="entry-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" class="entry-image"><?php the_post_thumbnail( 'medium' ); ?></a>
			<figcaption><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></figcaption>
		</figure>
		<?php
	}
	?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content native_html_style">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'startertheme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
