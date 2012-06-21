<?php
/***

	The default template for displaying content

***/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ) {
		?>
		<figure class="entry-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" class="entry-image"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<figcaption><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></figcaption>
		</figure>
		<?php
	}
	?>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php site_theme_item_posted_on(); // this function is in functions.php ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<section class="entry-content">
		<div class="entry-summary native_html_style">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</section><!-- .entry-content -->

	<footer class="entry-meta">
		<?php $show_sep = false; ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'startertheme' ) );
			if ( $categories_list ):
		?>
		<span class="cat-links">
			<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'startertheme' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
			$show_sep = true; ?>
		</span>
		<?php endif; // End if categories ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'startertheme' ) );
			if ( $tags_list ):
			if ( $show_sep ) : ?>
		<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
		<span class="tag-links">
			<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'startertheme' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
			$show_sep = true; ?>
		</span>
		<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'startertheme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
