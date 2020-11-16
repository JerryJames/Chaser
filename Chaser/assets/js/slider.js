/**
 * Flexslider Setup
 *
 * Adds the Flexslider Plugin for the Featured Post Slideshow
 *
 * @package Chaser
 */

jQuery( document ).ready(function($) {

	/* Add flexslider to #post-slider div */
	$( "#post-slider" ).flexslider({
		animation: chaser_slider_params.animation,
		slideshowSpeed: chaser_slider_params.speed,
		namespace: "zeeflex-",
		selector: ".zeeslides > li",
		smoothHeight: false,
		pauseOnHover: true,
		controlNav: false,
		controlsContainer: ".post-slider-controls"
	});

});
