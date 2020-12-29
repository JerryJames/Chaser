<?php
/**
 * Upgrade Control for the Customizer
 *
 * @package Chaser
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays the upgrade teaser in the Customizer.
	 */
	class Chaser_Customize_Upgrade_Control extends WP_Customize_Control {
		/**
		 * Render Control
		 */
		public function render_content() {
			?>

			<div class="upgrade-pro-version">

				<span class="customize-control-title"><?php esc_html_e( 'Chaser Thems V1.0.0', 'chaser' ); ?></span>

				<span class="textfield">
					<?php printf( esc_html__( 'Welcome to %s Thems.', 'chaser' ), 'Chaser' ); ?>
				</span>


			</div>

			<?php
		}
	}

endif;
