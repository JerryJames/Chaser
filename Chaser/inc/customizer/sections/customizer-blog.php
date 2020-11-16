<?php
/**
 * Blog Settings
 *
 * Register Blog Settings section, settings and controls for Theme Customizer
 *
 * @package Gridbox
 */

/**
 * Adds blog settings in the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function chaser_customize_register_blog_settings( $wp_customize ) {

	// Add Section for Blog Settings.
	$wp_customize->add_section( 'chaser_section_blog', array(
		'title'    => esc_html__( 'Blog Settings', 'chaser' ),
		'priority' => 25,
		'panel'    => 'chaser_options_panel',
	) );

	$wp_customize->selective_refresh->add_partial( 'chaser_theme_options[post_layout]', array(
		'selector'         => '.site-main .post-wrapper',
		'render_callback'  => 'chaser_customize_partial_blog_layout',
		'fallback_refresh' => false,
	) );

	// Add Blog Title setting and control.
	$wp_customize->add_setting( 'chaser_theme_options[blog_title]', array(
		'default'           => '',
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'chaser_theme_options[blog_title]', array(
		'label'    => esc_html__( 'Blog Title', 'chaser' ),
		'section'  => 'chaser_section_blog',
		'settings' => 'chaser_theme_options[blog_title]',
		'type'     => 'text',
		'priority' => 10,
	) );

	$wp_customize->selective_refresh->add_partial( 'chaser_theme_options[blog_title]', array(
		'selector'         => '.blog-header .blog-title',
		'render_callback'  => 'chaser_customize_partial_blog_title',
		'fallback_refresh' => false,
	) );

	// Add Blog Description setting and control.
	$wp_customize->add_setting( 'chaser_theme_options[blog_description]', array(
		'default'           => '',
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'chaser_theme_options[blog_description]', array(
		'label'    => esc_html__( 'Blog Description', 'chaser' ),
		'section'  => 'chaser_section_blog',
		'settings' => 'chaser_theme_options[blog_description]',
		'type'     => 'textarea',
		'priority' => 20,
	) );

	$wp_customize->selective_refresh->add_partial( 'chaser_theme_options[blog_description]', array(
		'selector'         => '.blog-header .blog-description',
		'render_callback'  => 'chaser_customize_partial_blog_description',
		'fallback_refresh' => false,
	) );

	// Add Blog Layout setting and control.
	$wp_customize->add_setting( 'chaser_theme_options[post_layout]', array(
		'default'           => 'one-column',
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'chaser_sanitize_select',
	) );

	$wp_customize->add_control( 'chaser_theme_options[post_layout]', array(
		'label'    => esc_html__( 'Blog Layout', 'chaser' ),
		'section'  => 'chaser_section_blog',
		'settings' => 'chaser_theme_options[post_layout]',
		'type'     => 'select',
		'priority' => 30,
		'choices'  => array(
			'one-column'  => esc_html__( 'One Column', 'chaser' ),
			'two-columns' => esc_html__( 'Two Columns', 'chaser' ),
		),
	) );

	// Add Setting and Control for Excerpt Length.
	$wp_customize->add_setting( 'chaser_theme_options[excerpt_length]', array(
		'default'           => 10,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'chaser_theme_options[excerpt_length]', array(
		'label'    => esc_html__( 'Excerpt Length', 'chaser' ),
		'section'  => 'chaser_section_blog',
		'settings' => 'chaser_theme_options[excerpt_length]',
		'type'     => 'text',
		'priority' => 40,
	) );

	// Add Setting and Control for Read More Text.
	$wp_customize->add_setting( 'chaser_theme_options[read_more_text]', array(
		'default'           => esc_html__( 'Continue reading', 'chaser' ),
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'chaser_theme_options[read_more_text]', array(
		'label'    => esc_html__( 'Read More Text', 'chaser' ),
		'section'  => 'chaser_section_blog',
		'settings' => 'chaser_theme_options[read_more_text]',
		'type'     => 'text',
		'priority' => 50,
	) );

	// Add Magazine Widgets Headline.
	$wp_customize->add_control( new Chaser_Customize_Header_Control(
		$wp_customize, 'chaser_theme_options[blog_magazine_widgets_title]', array(
			'label'    => esc_html__( 'Magazine Widgets', 'chaser' ),
			'section'  => 'chaser_section_blog',
			'settings' => array(),
			'priority' => 60,
		)
	) );

	// Add Setting and Control for Magazine widgets.
	$wp_customize->add_setting( 'chaser_theme_options[blog_magazine_widgets]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'chaser_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'chaser_theme_options[blog_magazine_widgets]', array(
		'label'    => esc_html__( 'Display Magazine widgets on blog index', 'chaser' ),
		'section'  => 'chaser_section_blog',
		'settings' => 'chaser_theme_options[blog_magazine_widgets]',
		'type'     => 'checkbox',
		'priority' => 70,
	) );
}
add_action( 'customize_register', 'chaser_customize_register_blog_settings' );

/**
 * Render the blog title for the selective refresh partial.
 */
function chaser_customize_partial_blog_title() {
	$theme_options = chaser_theme_options();
	echo wp_kses_post( $theme_options['blog_title'] );
}

/**
 * Render the blog description for the selective refresh partial.
 */
function chaser_customize_partial_blog_description() {
	$theme_options = chaser_theme_options();
	echo wp_kses_post( $theme_options['blog_description'] );
}

/**
 * Render the blog layout for the selective refresh partial.
 */
function chaser_customize_partial_blog_layout() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content' );
	}
}
