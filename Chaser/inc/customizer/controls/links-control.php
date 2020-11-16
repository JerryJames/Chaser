<?php
/**
 * Theme Links Control for the Customizer
 *
 * @package Chaser
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays the theme links in the Customizer.
	 */
	class Chaser_Customize_Links_Control extends WP_Customize_Control {
		/**
		 * Render Control
		 */
		public function render_content() {
			?>

			<div class="theme-links">

				<span class="customize-control-title"><?php esc_html_e( 'Theme Links', 'chaser' ); ?></span>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/themes/chaser/', 'chaser' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=chaser&utm_content=theme-page" target="_blank">
						<?php esc_html_e( 'Theme Page', 'chaser' ); ?>
					</a>
				</p>

				<p>
					<a href="http://preview.themezee.com/?demo=chaser&utm_source=customizer&utm_campaign=chaser" target="_blank">
						<?php esc_html_e( 'Theme Demo', 'chaser' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/docs/chaser-documentation/', 'chaser' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=chaser&utm_content=documentation" target="_blank">
						<?php esc_html_e( 'Theme Documentation', 'chaser' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/changelogs/?action=themezee-changelog&type=theme&slug=chaser/', 'chaser' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Theme Changelog', 'chaser' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/chaser/reviews/', 'chaser' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Rate this theme', 'chaser' ); ?>
					</a>
				</p>

			</div>

			<?php
		}
	}

endif;
