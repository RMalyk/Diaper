<?php

function effiki_register_styles()
{

	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css ', 'reset');
	wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css', 'global');
	wp_enqueue_style('_fonts', get_template_directory_uri() . '/css/_fonts.css', '_fonts');


	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', 'style');
	
	wp_enqueue_style('swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.css", 'swiper');
	
	wp_enqueue_style('_header', get_template_directory_uri() . '/css/_header.css', '_header');
	wp_enqueue_style('_section-main', get_template_directory_uri() . '/css/_section-main.css', '_section-main');
	wp_enqueue_style('_why_choose_diapers', get_template_directory_uri() . '/css/_why_choose_diapers.css', '_why_choose_diapers');
	wp_enqueue_style('_choose_color', get_template_directory_uri() . '/css/_choose_color.css', '_choose_color');
	wp_enqueue_style('_buy_with', get_template_directory_uri() . '/css/_buy_with.css', '_buy_with');
	wp_enqueue_style('_why_choose_us', get_template_directory_uri() . '/css/_why_choose_us.css', '_why_choose_us');
	wp_enqueue_style('_reviews', get_template_directory_uri() . '/css/_reviews.css', '_reviews');
	wp_enqueue_style('_reviews-slider', get_template_directory_uri() . '/css/_reviews-slider.css', '_reviews-slider');
	wp_enqueue_style('_gallery', get_template_directory_uri() . '/css/_gallery.css', '_gallery');
	wp_enqueue_style('_how_to_order', get_template_directory_uri() . '/css/_how_to_order.css', '_how_to_order');
	wp_enqueue_style('_contacts', get_template_directory_uri() . '/css/_contacts.css', '_contacts');
	wp_enqueue_style('_map', get_template_directory_uri() . '/css/_map.css', '_map');
	wp_enqueue_style('_social', get_template_directory_uri() . '/css/_social.css', '_social');
	wp_enqueue_style('_checkout__btn', get_template_directory_uri() . '/css/_checkout__btn.css', '_checkout__btn');
	wp_enqueue_style('_popUp', get_template_directory_uri() . '/css/_popUp.css', '_popUp');
	wp_enqueue_style('_header__mobile-menu', get_template_directory_uri() . '/css/_header__mobile-menu.css', '_header__mobile-menu');
	wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css', 'media');

}
add_action('wp_enqueue_scripts', 'effiki_register_styles');



function effiki_register_scripts() {

	wp_enqueue_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	wp_enqueue_script( 'popUP', get_template_directory_uri() . '/js/popUP.js', array(), '1.0.0', true );
	wp_enqueue_script( 'order', get_template_directory_uri() . '/js/order.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'effiki_register_scripts' );

function effiki_theme_support() {

	// Custom logo.
	$logo_width  = 166;
	$logo_height = 86;

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

}

add_action( 'after_setup_theme', 'effiki_theme_support' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );