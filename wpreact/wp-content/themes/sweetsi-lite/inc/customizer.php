<?php
/**
 * Sweetsi Lite Theme Customizer
 *
 * @package Sweetsi Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function sweetsi_lite_customize_register($wp_customize) {
	//add home page setting pannel
	$wp_customize->add_panel('sweetsi_lite_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'sweetsi-lite'),
		'description'    => __('Description of what this panel does.', 'sweetsi-lite'),
	));	

	// font array
	$sweetsi_lite_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'sweetsi_lite_typography', array(
    	'title'      => __( 'Typography', 'sweetsi-lite' ),
		'priority'   => 30,
		'panel' => 'sweetsi_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_paragraph_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'Paragraph Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	$wp_customize->add_setting('sweetsi_lite_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_atag_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( '"a" Tag Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_li_color', array(
		'label' => __('"li" Tag Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_li_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( '"li" Tag Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_h1_color', array(
		'label' => __('H1 Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_h1_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'H1 Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('sweetsi_lite_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_h2_color', array(
		'label' => __('h2 Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_h2_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'h2 Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('sweetsi_lite_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_h3_color', array(
		'label' => __('h3 Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_h3_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'h3 Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('sweetsi_lite_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_h4_color', array(
		'label' => __('h4 Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_h4_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'h4 Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('sweetsi_lite_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_h5_color', array(
		'label' => __('h5 Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_h5_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'h5 Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('sweetsi_lite_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'sweetsi_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_h6_color', array(
		'label' => __('h6 Color', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_typography',
		'settings' => 'sweetsi_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('sweetsi_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sweetsi_lite_h6_font_family', array(
	    'section'  => 'sweetsi_lite_typography',
	    'label'    => __( 'h6 Fonts','sweetsi-lite'),
	    'type'     => 'select',
	    'choices'  => $sweetsi_lite_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('sweetsi_lite_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_typography',
		'setting'	=> 'sweetsi_lite_h6_font_size',
		'type'	=> 'text'
	));

  	$wp_customize->add_setting('sweetsi_lite_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','sweetsi-lite'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','sweetsi-lite'),
            'Transparent Background' => __('Transparent Background','sweetsi-lite'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('sweetsi_lite_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','sweetsi-lite'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('sweetsi_lite_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','sweetsi-lite'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'sweetsi_lite_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sweetsi_lite_sanitize_choices',
	) );
	$wp_customize->add_control( 'sweetsi_lite_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'sweetsi-lite' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('sweetsi_lite_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));	
	$wp_customize->add_control('sweetsi_lite_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','sweetsi-lite'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sweetsi_lite_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control( 'sweetsi_lite_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','sweetsi-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sweetsi_lite_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control( 'sweetsi_lite_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','sweetsi-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sweetsi_lite_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_number_range',
	));
	$wp_customize->add_control('sweetsi_lite_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','sweetsi-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	$wp_customize->add_setting( 'sweetsi_lite_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_number_range',
	));
	$wp_customize->add_control('sweetsi_lite_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','sweetsi-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('sweetsi_lite_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_choices'
    ));
    $wp_customize->add_control('sweetsi_lite_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','sweetsi-lite'),
       'choices' => array(
            'Yes' => __('Yes','sweetsi-lite'),
            'No' => __('No','sweetsi-lite'),
        ),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_section('sweetsi_lite_product_button_section', array(
		'title'    => __('Product Button Settings', 'sweetsi-lite'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'sweetsi_lite_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','sweetsi-lite' ),
		'section' => 'sweetsi_lite_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'sweetsi_lite_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','sweetsi-lite' ),
		'section' => 'sweetsi_lite_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'sweetsi_lite_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_number_range',
	));
	$wp_customize->add_control('sweetsi_lite_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','sweetsi-lite' ),
		'section' => 'sweetsi_lite_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('sweetsi_lite_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'sweetsi-lite'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('sweetsi_lite_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','sweetsi-lite'),
        'section' => 'sweetsi_lite_product_sale_section',
        'choices' => array(
            'Right' => __('Right','sweetsi-lite'),
            'Left' => __('Left','sweetsi-lite'),
        ),
	) );

	$wp_customize->add_setting( 'sweetsi_lite_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','sweetsi-lite'),
        'section'  => 'sweetsi_lite_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('sweetsi_lite_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float'
	));
	$wp_customize->add_control('sweetsi_lite_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','sweetsi-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sweetsi_lite_product_sale_section',
		'type'=> 'number'
	));

	//Layouts
	$wp_customize->add_section('sweetsi_lite_left_right', array(
		'title'    => __('Layout Settings', 'sweetsi-lite'),
		'priority' => null,
		'panel'    => 'sweetsi_lite_panel_id',
	));

	$wp_customize->add_setting('sweetsi_lite_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','sweetsi-lite'),
       'section' => 'sweetsi_lite_left_right'
    ));

    $wp_customize->add_setting( 'sweetsi_lite_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sweetsi_lite_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'sweetsi-lite'),
	    'section' => 'sweetsi_lite_left_right',
	    'settings' => 'sweetsi_lite_loader_background_color_settings',
  	)));

	$wp_customize->add_setting( 'sweetsi_lite_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sweetsi_lite_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Shop Page Sidebar','sweetsi-lite'),
		'section' => 'sweetsi_lite_left_right'
    ));

	$wp_customize->add_setting( 'sweetsi_lite_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sweetsi_lite_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','sweetsi-lite'),
		'section' => 'sweetsi_lite_left_right'
    ));

	$wp_customize->add_setting('sweetsi_lite_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'sweetsi_lite_sanitize_choices',
	));
	$wp_customize->add_control('sweetsi_lite_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'sweetsi-lite'),
		'section'        => 'sweetsi_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'sweetsi-lite'),
			'Right Sidebar' => __('Right Sidebar', 'sweetsi-lite'),
			'One Column'    => __('One Column', 'sweetsi-lite'),
			'Grid Layout'   => __('Grid Layout', 'sweetsi-lite')
		),
	));

	$wp_customize->add_setting('sweetsi_lite_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'sweetsi_lite_sanitize_choices',
	));
	$wp_customize->add_control('sweetsi_lite_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'sweetsi-lite'),
		'section'        => 'sweetsi_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'sweetsi-lite'),
			'Right Sidebar' => __('Right Sidebar', 'sweetsi-lite'),
			'One Column'    => __('One Column', 'sweetsi-lite'),
		),
	));

	$wp_customize->add_setting('sweetsi_lite_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'sweetsi_lite_sanitize_choices',
	));
	$wp_customize->add_control('sweetsi_lite_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'sweetsi-lite'),
		'section'        => 'sweetsi_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'sweetsi-lite'),
			'Right Sidebar' => __('Right Sidebar', 'sweetsi-lite'),
			'One Column'    => __('One Column', 'sweetsi-lite'),
		),
	));

	$wp_customize->add_setting('sweetsi_lite_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','sweetsi-lite'),
        'description' => __('Here you can change the Width layout. ','sweetsi-lite'),
        'section' => 'sweetsi_lite_left_right',
        'choices' => array(
            'Default' => __('Default','sweetsi-lite'),
            'Container' => __('Container','sweetsi-lite'),
            'Box Container' => __('Box Container','sweetsi-lite'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'sweetsi_lite_theme_button', array(
		'title' => __('Button Option','sweetsi-lite'),
		'panel' => 'sweetsi_lite_panel_id',
	));

	$wp_customize->add_setting('sweetsi_lite_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','sweetsi-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sweetsi_lite_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sweetsi_lite_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','sweetsi-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sweetsi_lite_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'sweetsi_lite_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'sweetsi_lite_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','sweetsi-lite' ),
		'section'     => 'sweetsi_lite_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('sweetsi_lite_topbar',array(
		'title'	=> __('Topbar Section','sweetsi-lite'),
		'description'	=> __('Add topbar content','sweetsi-lite'),
		'priority'	=> null,
		'panel' => 'sweetsi_lite_panel_id',
	));

	$wp_customize->add_setting('sweetsi_lite_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_phone_number',
	));
	$wp_customize->add_control('sweetsi_lite_phone1',array(
		'label'	=> __('Phone Number','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('sweetsi_lite_mail1',array(
		'label'	=> __('Mail Address','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sweetsi_lite_topbar_text',array(
		'label'	=> __('Add Topbar Text','sweetsi-lite'),
		'section'	=> 'sweetsi_lite_topbar',
		'type'	=> 'text'
	));

	//Slider
	$wp_customize->add_section( 'sweetsi_lite_slider' , array(
    	'title'      => __( 'Slider Settings', 'sweetsi-lite' ),
		'priority'   => null,
		'panel' => 'sweetsi_lite_panel_id'
	) );

	$wp_customize->add_setting('sweetsi_lite_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','sweetsi-lite'),
       'section' => 'sweetsi_lite_slider'
    ));

    $wp_customize->add_setting('sweetsi_lite_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','sweetsi-lite'),
       'section' => 'sweetsi_lite_slider'
    ));

    $wp_customize->add_setting('sweetsi_lite_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','sweetsi-lite'),
       'section' => 'sweetsi_lite_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'sweetsi_lite_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'sweetsi_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'sweetsi_lite_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'sweetsi-lite' ),
			'description'	=> __('Size of image should be 1600 x 633','sweetsi-lite'),
			'section'  => 'sweetsi_lite_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//Slider excerpt
	$wp_customize->add_setting( 'sweetsi_lite_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'sweetsi_lite_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','sweetsi-lite' ),
		'section'     => 'sweetsi_lite_slider',
		'type'        => 'number',
		'settings'    => 'sweetsi_lite_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('sweetsi_lite_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','sweetsi-lite'),
		'description'    => __('This option will add colors over the slider.','sweetsi-lite'),
       'section' => 'sweetsi_lite_slider'
    ));

    $wp_customize->add_setting('sweetsi_lite_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sweetsi_lite_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'sweetsi-lite'),
		'section'  => 'sweetsi_lite_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','sweetsi-lite'),
		'settings' => 'sweetsi_lite_slider_image_overlay_color',
	)));

	//Opacity
	$wp_customize->add_setting('sweetsi_lite_slider_image_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control( 'sweetsi_lite_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','sweetsi-lite' ),
	'section'     => 'sweetsi_lite_slider',
	'type'        => 'select',
	'settings'    => 'sweetsi_lite_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','sweetsi-lite'),
		'0.1' =>  esc_attr('0.1','sweetsi-lite'),
		'0.2' =>  esc_attr('0.2','sweetsi-lite'),
		'0.3' =>  esc_attr('0.3','sweetsi-lite'),
		'0.4' =>  esc_attr('0.4','sweetsi-lite'),
		'0.5' =>  esc_attr('0.5','sweetsi-lite'),
		'0.6' =>  esc_attr('0.6','sweetsi-lite'),
		'0.7' =>  esc_attr('0.7','sweetsi-lite'),
		'0.8' =>  esc_attr('0.8','sweetsi-lite'),
		'0.9' =>  esc_attr('0.9','sweetsi-lite')
	),
	));

	$wp_customize->add_setting( 'sweetsi_lite_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'=> 'sweetsi_lite_sanitize_number_range',
	));
	$wp_customize->add_control( 'sweetsi_lite_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','sweetsi-lite' ),
		'section' => 'sweetsi_lite_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('sweetsi_lite_slider_image_height',array(
		'default'=> __('550','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_slider_image_height',array(
		'label'	=> __('Slider Image Height','sweetsi-lite'),
		'section'=> 'sweetsi_lite_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_slider_button',array(
		'default'=> __('READ MORE','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_slider_button',array(
		'label'	=> __('Slider Button','sweetsi-lite'),
		'section'=> 'sweetsi_lite_slider',
		'type'=> 'text'
	));

	// Our Services Settings

	$wp_customize->add_section('sweetsi_lite_services',array(
		'title' => __("Our Services Settings",'sweetsi-lite'),
		'panel' => 'sweetsi_lite_panel_id',
    ));

    $wp_customize->add_setting('sweetsi_lite_services_title',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('sweetsi_lite_services_title',array(
        'label' => __('Section Title','sweetsi-lite'),
        'section'=> 'sweetsi_lite_services',
        'setting'=> 'sweetsi_lite_services_title',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('sweetsi_lite_services_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('sweetsi_lite_services_text',array(
        'label' => __('Section Text','sweetsi-lite'),
        'section'=> 'sweetsi_lite_services',
        'setting'=> 'sweetsi_lite_services_text',
        'type'=> 'text'
    ));

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $cats[]='Select';	
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('sweetsi_lite_cate_tab',array(
    	'default'	=> 'select',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('sweetsi_lite_cate_tab',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Services category','sweetsi-lite'),
        'section' => 'sweetsi_lite_services',
    ));

	//404 Page Setting
	$wp_customize->add_section('sweetsi_lite_404_page_setting',array(
		'title'	=> __('404 Page','sweetsi-lite'),
		'panel' => 'sweetsi_lite_panel_id',
	));	

	$wp_customize->add_setting('sweetsi_lite_title_404_page',array(
		'default'=> __('404 Not Found','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_title_404_page',array(
		'label'	=> __('404 Page Title','sweetsi-lite'),
		'section'=> 'sweetsi_lite_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_content_404_page',array(
		'default'=>  __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_content_404_page',array(
		'label'	=> __('404 Page Content','sweetsi-lite'),
		'section'=> 'sweetsi_lite_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_button_404_page',array(
		'default'=> __('Back to Home Page','sweetsi-lite'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_button_404_page',array(
		'label'	=> __('404 Page Button','sweetsi-lite'),
		'section'=> 'sweetsi_lite_404_page_setting',
		'type'=> 'text'
	));

	//Blog Post
	$wp_customize->add_section('sweetsi_lite_blog_post',array(
		'title'	=> __('Blog Page Settings','sweetsi-lite'),
		'panel' => 'sweetsi_lite_panel_id',
	));	

	$wp_customize->add_setting('sweetsi_lite_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting('sweetsi_lite_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting('sweetsi_lite_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting('sweetsi_lite_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting('sweetsi_lite_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting('sweetsi_lite_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

	$wp_customize->add_setting('sweetsi_lite_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','sweetsi-lite'),
        'section' => 'sweetsi_lite_blog_post',
        'choices' => array(
            'No Content' => __('No Content','sweetsi-lite'),
            'Excerpt Content' => __('Excerpt Content','sweetsi-lite'),
            'Full Content' => __('Full Content','sweetsi-lite'),
        ),
	) );

    $wp_customize->add_setting( 'sweetsi_lite_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'sweetsi_lite_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','sweetsi-lite' ),
		'section'     => 'sweetsi_lite_blog_post',
		'type'        => 'number',
		'settings'    => 'sweetsi_lite_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'sweetsi_lite_post_suffix_option', array(
		'default'   => __('...','sweetsi-lite'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sweetsi_lite_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','sweetsi-lite' ),
		'section'     => 'sweetsi_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'sweetsi_lite_post_suffix_option',
	) );

	$wp_customize->add_setting('sweetsi_lite_button_text',array(
		'default'=> __('READ MORE','sweetsi-lite'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_button_text',array(
		'label'	=> __('Add Button Text','sweetsi-lite'),
		'section'=> 'sweetsi_lite_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'sweetsi_lite_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sweetsi_lite_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','sweetsi-lite' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'sweetsi-lite' ),
        ),
		'section'     => 'sweetsi_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'sweetsi_lite_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('sweetsi_lite_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','sweetsi-lite'),
        'section' => 'sweetsi_lite_blog_post',
        'choices' => array(
            'In Box' => __('In Box','sweetsi-lite'),
            'Without Box' => __('Without Box','sweetsi-lite'),
        ),
	) );

	$wp_customize->add_setting('sweetsi_lite_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','sweetsi-lite'),
       'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting( 'sweetsi_lite_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sweetsi_lite_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','sweetsi-lite' ),
        'section' => 'sweetsi_lite_blog_post'
    ));

    $wp_customize->add_setting('sweetsi_lite_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','sweetsi-lite'),
        'section' => 'sweetsi_lite_blog_post',
        'choices' => array(
            'categories' => __('Categories','sweetsi-lite'),
            'tags' => __('Tags','sweetsi-lite'),
        ),
	) );

	$wp_customize->add_setting('sweetsi_lite_related_post_title',array(
		'default'=> __('Related Posts','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_related_post_title',array(
		'label'	=> __('Related Post Title','sweetsi-lite'),
		'section'=> 'sweetsi_lite_blog_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('sweetsi_lite_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_related_posts_number',array(
		'label'	=> __('Related Post Number','sweetsi-lite'),
		'section'=> 'sweetsi_lite_blog_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('sweetsi_lite_noresult_found',array(
		'title'	=> __('No Result Found','sweetsi-lite'),
		'panel' => 'sweetsi_lite_panel_id',
	));	

	$wp_customize->add_setting('sweetsi_lite_nosearch_found_title',array(
		'default'=> __('Nothing Found','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','sweetsi-lite'),
		'section'=> 'sweetsi_lite_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','sweetsi-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sweetsi_lite_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','sweetsi-lite'),
		'section'=> 'sweetsi_lite_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sweetsi_lite_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('sweetsi_lite_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','sweetsi-lite'),
       'section' => 'sweetsi_lite_noresult_found'
    ));

	//footer
	$wp_customize->add_section('sweetsi_lite_footer_section', array(
		'title'       => __('Footer Text', 'sweetsi-lite'),
		'priority'    => null,
		'panel'       => 'sweetsi_lite_panel_id',
	));

	$wp_customize->add_setting('sweetsi_lite_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices',
    ));
    $wp_customize->add_control('sweetsi_lite_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'sweetsi-lite'),
        'section'     => 'sweetsi_lite_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'sweetsi-lite'),
        'choices' => array(
            '1'     => __('One', 'sweetsi-lite'),
            '2'     => __('Two', 'sweetsi-lite'),
            '3'     => __('Three', 'sweetsi-lite'),
            '4'     => __('Four', 'sweetsi-lite')
        ),
    ));

    $wp_customize->add_setting('sweetsi_lite_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sweetsi_lite_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'sweetsi-lite'),
		'section'  => 'sweetsi_lite_footer_section',
	)));

	$wp_customize->add_setting('sweetsi_lite_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sweetsi_lite_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','sweetsi-lite'),
        'section' => 'sweetsi_lite_footer_section'
	)));

	$wp_customize->add_setting('sweetsi_lite_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('sweetsi_lite_footer_copy', array(
		'label'   => __('Copyright Text', 'sweetsi-lite'),
		'section' => 'sweetsi_lite_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('sweetsi_lite_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','sweetsi-lite'),
        'section' => 'sweetsi_lite_footer_section',
        'choices' => array(
            'left' => __('Left','sweetsi-lite'),
            'right' => __('Right','sweetsi-lite'),
            'center' => __('Center','sweetsi-lite'),
        ),
	) );

	$wp_customize->add_setting('sweetsi_lite_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','sweetsi-lite' ),
		'section'=> 'sweetsi_lite_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('sweetsi_lite_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_copyright_padding',array(
		'label'	=> __('Copyright Padding','sweetsi-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sweetsi_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sweetsi_lite_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'sweetsi_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('sweetsi_lite_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','sweetsi-lite'),
      	'section' => 'sweetsi_lite_footer_section',
	));

	$wp_customize->add_setting('sweetsi_lite_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'sweetsi_lite_sanitize_choices'
	));
	$wp_customize->add_control('sweetsi_lite_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','sweetsi-lite'),
        'section' => 'sweetsi_lite_footer_section',
        'choices' => array(
            'Left' => __('Left','sweetsi-lite'),
            'Right' => __('Right','sweetsi-lite'),
            'Center' => __('Center','sweetsi-lite'),
        ),
	) );

	$wp_customize->add_setting('sweetsi_lite_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'sweetsi_lite_sanitize_float',
	));
	$wp_customize->add_control('sweetsi_lite_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','sweetsi-lite'),
		'section'=> 'sweetsi_lite_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action('customize_register', 'sweetsi_lite_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Sweetsi_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the consweetsi_lite_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Sweetsi_Lite_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Sweetsi_Lite_Customize_Section_Pro(
				$manager,
				'sweetsi_lite_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Sweetsi Lite', 'sweetsi-lite'),
					'pro_text' => esc_html__('GO PRO', 'sweetsi-lite'),
					'pro_url'  => esc_url('https://netnus.com/product/sweetsi-pro-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('sweetsi-lite-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('sweetsi-lite-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Sweetsi_Lite_Customize::get_instance();