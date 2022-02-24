<?php
/**
 * @package Sweetsi Lite
 * @subpackage sweetsi_lite
 * @since sweetsi-lite 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses sweetsi_lite_header_style()
*/

function sweetsi_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'sweetsi_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'sweetsi_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'sweetsi_lite_custom_header_setup' );

if ( ! function_exists( 'sweetsi_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see sweetsi_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'sweetsi_lite_header_style' );
function sweetsi_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$sweetsi_lite_custom_css = "
        #header, .page-template-custom-front-page .info-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'sweetsi-lite-basic-style', $sweetsi_lite_custom_css );
	endif;
}
endif; // sweetsi_lite_header_style