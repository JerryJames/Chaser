<?php
/**
 * The template for displaying large posts in the Magazine Horizontal Box widget.
 *
 * @package Chaser
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post clearfix' ); ?>>

	<?php chaser_post_image( 'chaser-thumbnail-large' ); ?>

	<div class="post-content">

		<header class="entry-header">

			<?php chaser_magazine_entry_meta(); ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_excerpt(); ?>
			<?php chaser_more_link(); ?>

		</div><!-- .entry-content -->

	</div>

</article>
