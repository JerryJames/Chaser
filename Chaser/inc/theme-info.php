<?php
/**
 * Theme Info
 *
 * Adds a simple Theme Info page to the Appearance section of the WordPress Dashboard.
 *
 * @package Chaser
 */

/**
 * Add Theme Info page to admin menu
 */
function chaser_theme_info_menu_link() {

	// Get theme details.
	$theme = wp_get_theme();

	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'chaser' ), $theme->display( 'Name' ), $theme->display( 'Version' ) ),
		esc_html__( 'Theme Info', 'chaser' ),
		'edit_theme_options',
		'chaser',
		'chaser_theme_info_page'
	);

}
add_action( 'admin_menu', 'chaser_theme_info_menu_link' );

/**
 * Display Theme Info page
 */
function chaser_theme_info_page() {

	// Get theme details.
	$theme = wp_get_theme();
	?>

	<div class="wrap theme-info-wrap">

		<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'chaser' ), $theme->display( 'Name' ), $theme->display( 'Version' ) ); ?></h1>

		<div class="theme-description"><?php echo $theme->display( 'Description' ); ?></div>

		<hr>

		<hr>

		<div id="getting-started">

			<h3><?php printf( esc_html__( 'Getting Started with %s', 'chaser' ), $theme->display( 'Name' ) ); ?></h3>

			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Theme Documentation', 'chaser' ); ?></h4>

						<p class="about">
							<?php esc_html_e( 'Here configuration options provided are simple and self explanatory, so no additional input required. ', 'chaser' ); ?>
						</p>

					</div>

					<div class="section">
						<h4><?php esc_html_e( 'Theme Options', 'chaser' ); ?></h4>

						<p class="about">
							<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'chaser' ), $theme->display( 'Name' ) ); ?>
						</p>
						<p>
							<a href="<?php echo wp_customize_url(); ?>" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'chaser' ); ?></a>
						</p>
					</div>

				</div>

				<div class="column column-half clearfix">

					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.jpg" />

				</div>

			</div>

		</div>

		<hr>


		<hr>

		<div id="theme-author">

			<p><?php printf( esc_html__( 'This Theme is proudly brought to you by ITMRK.  :)', 'chaser' )); ?>
			</p>

		</div>

	</div>

	<?php
}

/**
 * Enqueues CSS for Theme Info page
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function chaser_theme_info_page_css( $hook ) {

	// Load styles and scripts only on theme info page.
	if ( 'appearance_page_chaser' != $hook ) {
		return;
	}

	// Embed theme info css style.
	wp_enqueue_style( 'chaser-theme-info-css', get_template_directory_uri() . '/assets/css/theme-info.css' );

}
add_action( 'admin_enqueue_scripts', 'chaser_theme_info_page_css' );
