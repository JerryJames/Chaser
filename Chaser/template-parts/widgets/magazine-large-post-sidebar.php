<?php
/**
 * The template for displaying posts in the Magazine Sidebar widget
 *
 * @package Chaser
 */

// Get widget settings.
$post_excerpt = get_query_var( 'chaser_post_excerpt', false );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php chaser_post_image(); ?>

	<header class="entry-header">

		<?php chaser_magazine_entry_meta(); ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<?php // Display post excerpt if enabled.
	if ( $post_excerpt ) : ?>

		<div class="entry-content clearfix">

			<?php the_excerpt(); ?>
			<?php chaser_more_link(); ?>

		</div><!-- .entry-content -->

	<?php endif; ?>

</article>
