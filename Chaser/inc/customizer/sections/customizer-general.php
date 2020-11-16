<?php
/**
 * General Settings
 *
 * Register General section, settings and controls for Theme Customizer
 *
 * @package Chaser
 */

/**
 * Adds all general settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function chaser_customize_register_general_settings( $wp_customize ) {

	// Add Section for Theme Options.
	$wp_customize->add_section( 'chaser_section_general', array(
		'title'    => esc_html__( 'General Settings', 'chaser' ),
		'priority' => 10,
		'panel'    => 'chaser_options_panel',
	) );

	// Add Settings and Controls for Layout.
	$wp_customize->add_setting( 'chaser_theme_options[layout]', array(
		'default'           => 'right-sidebar',
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'chaser_sanitize_select',
	) );

	$wp_customize->add_control( 'chaser_theme_options[layout]', array(
		'label'    => esc_html__( 'Theme Layout', 'chaser' ),
		'section'  => 'chaser_section_general',
		'settings' => 'chaser_theme_options[layout]',
		'type'     => 'radio',
		'priority' => 10,
		'choices'  => array(
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'chaser' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'chaser' ),
		),
	) );
}
add_action( 'customize_register', 'chaser_customize_register_general_settings' );
