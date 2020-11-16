<?php
/**
 * The template for displaying single posts
 *
 * @package Chaser
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php chaser_post_image_single(); ?>

	<header class="entry-header">

		<?php chaser_entry_meta(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content clearfix">

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chaser' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php chaser_entry_categories(); ?>
		<?php chaser_entry_tags(); ?>
		<?php do_action( 'chaser_author_bio' ); ?>
		<?php chaser_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>
