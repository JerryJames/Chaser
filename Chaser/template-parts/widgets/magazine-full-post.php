<?php
/**
 * The template for displaying full image posts in Magazine Post widgets
 *
 * @package Chaser
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php chaser_post_image( 'chaser-thumbnail-single' ); ?>

	<header class="entry-header">

		<?php chaser_entry_meta(); ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content clearfix">

		<?php the_excerpt(); ?>
		<?php chaser_more_link(); ?>

	</div><!-- .entry-content -->

</article>
