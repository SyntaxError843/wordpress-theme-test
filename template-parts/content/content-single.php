<?php
/**
 * Template part for displaying posts
 */

?>

<header class="content-header">
	<div class="meta mb-3">
		<span class="date">Published <?php the_date() ?></span>

		<?php
		
			if ( has_category() || has_tag() ) {

				the_tags(

					'<span class="tag"><i class="fa fa-tag"></i> ',
					'</span> <span class="tag"><i class="fa fa-tag"></i> ',
					'</span>'

				);

			}

		?>

		<span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span></div>
</header>
<header class="entry-header">
	<?php if ( is_singular() ) : ?>
		<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
	<?php else : ?>
		<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php endif; ?>

</header><!-- .entry-header -->

<div class="entry-content">
	<?php
	the_content();

	wp_link_pages(
		array(
			'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page' ) . '">',
			'after'    => '</nav>',
			/* translators: %: Page number. */
			'pagelink' => esc_html__( 'Page %' ),
		)
	);
	?>
</div>
