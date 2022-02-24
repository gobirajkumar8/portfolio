<?php
	
	/*---------------------------Width Layout -------------------*/
	$sweetsi_lite_theme_lay = get_theme_mod( 'sweetsi_lite_theme_options','Default');
    if($sweetsi_lite_theme_lay == 'Default'){
		$sweetsi_lite_custom_css .='body{';
			$sweetsi_lite_custom_css .='max-width: 100%;';
		$sweetsi_lite_custom_css .='}';
	}else if($sweetsi_lite_theme_lay == 'Container'){
		$sweetsi_lite_custom_css .='body{';
			$sweetsi_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$sweetsi_lite_custom_css .='}';
		$sweetsi_lite_custom_css .='.serach_outer{';
			$sweetsi_lite_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$sweetsi_lite_custom_css .='}';
	}else if($sweetsi_lite_theme_lay == 'Box Container'){
		$sweetsi_lite_custom_css .='body{';
			$sweetsi_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$sweetsi_lite_custom_css .='}';
		$sweetsi_lite_custom_css .='.serach_outer{';
			$sweetsi_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$sweetsi_lite_custom_css .='}';
		$sweetsi_lite_custom_css .='.page-template-custom-front-page #header{';
			$sweetsi_lite_custom_css .='right:0;';
		$sweetsi_lite_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$sweetsi_lite_theme_lay = get_theme_mod( 'sweetsi_lite_slider_image_opacity','0.5');
	if($sweetsi_lite_theme_lay == '0'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.1'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.1';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.2'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.2';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.3'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.3';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.4'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.4';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.5'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.5';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.6'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.6';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.7'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.7';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.8'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.8';
		$sweetsi_lite_custom_css .='}';
		}else if($sweetsi_lite_theme_lay == '0.9'){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:0.9';
		$sweetsi_lite_custom_css .='}';
	}

	$sweetsi_lite_slider_hide = get_theme_mod('sweetsi_lite_slider_hide', false);
	if($sweetsi_lite_slider_hide == false){
		$sweetsi_lite_custom_css .='.page-template-custom-front-page #header{';
			$sweetsi_lite_custom_css .='position: static; background: #e3e8e9; padding: 10px 0;';
		$sweetsi_lite_custom_css .='}';
		$sweetsi_lite_custom_css .='#home-services{';
			$sweetsi_lite_custom_css .='position: static; margin: 30px 0 0 0';
		$sweetsi_lite_custom_css .='}';
	}

	/*------------- Button Settings option-------------------*/
	$sweetsi_lite_button_padding_top_bottom = get_theme_mod('sweetsi_lite_button_padding_top_bottom');
	$sweetsi_lite_button_padding_left_right = get_theme_mod('sweetsi_lite_button_padding_left_right');
	$sweetsi_lite_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#category .explore-btn a{';
		$sweetsi_lite_custom_css .='padding-top: '.esc_attr($sweetsi_lite_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($sweetsi_lite_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($sweetsi_lite_button_padding_left_right).'px !important; padding-right: '.esc_attr($sweetsi_lite_button_padding_left_right).'px !important; display:inline-block;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_button_border_radius = get_theme_mod('sweetsi_lite_button_border_radius');
	$sweetsi_lite_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #category .explore-btn a{';
		$sweetsi_lite_custom_css .='border-radius: '.esc_attr($sweetsi_lite_button_border_radius).'px;';
	$sweetsi_lite_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$sweetsi_lite_theme_lay = get_theme_mod( 'sweetsi_lite_background_skin_mode','Transparent Background');
    if($sweetsi_lite_theme_lay == 'With Background'){
		$sweetsi_lite_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$sweetsi_lite_custom_css .='background-color: #fff;';
		$sweetsi_lite_custom_css .='}';
	}else if($sweetsi_lite_theme_lay == 'Transparent Background'){
		$sweetsi_lite_custom_css .='.page-box-single{';
			$sweetsi_lite_custom_css .='background-color: transparent;';
		$sweetsi_lite_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$sweetsi_lite_top_bottom_product_button_padding = get_theme_mod('sweetsi_lite_top_bottom_product_button_padding', 10);
	$sweetsi_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$sweetsi_lite_custom_css .='padding-top: '.esc_attr($sweetsi_lite_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($sweetsi_lite_top_bottom_product_button_padding).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_left_right_product_button_padding = get_theme_mod('sweetsi_lite_left_right_product_button_padding', 16);
	$sweetsi_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$sweetsi_lite_custom_css .='padding-left: '.esc_attr($sweetsi_lite_left_right_product_button_padding).'px; padding-right: '.esc_attr($sweetsi_lite_left_right_product_button_padding).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_product_button_border_radius = get_theme_mod('sweetsi_lite_product_button_border_radius', 0);
	$sweetsi_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$sweetsi_lite_custom_css .='border-radius: '.esc_attr($sweetsi_lite_product_button_border_radius).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_show_related_products = get_theme_mod('sweetsi_lite_show_related_products',true);
	if($sweetsi_lite_show_related_products == false){
		$sweetsi_lite_custom_css .='.related.products{';
			$sweetsi_lite_custom_css .='display: none;';
		$sweetsi_lite_custom_css .='}';
	}

	$sweetsi_lite_show_wooproducts_border = get_theme_mod('sweetsi_lite_show_wooproducts_border', false);
	if($sweetsi_lite_show_wooproducts_border == true){
		$sweetsi_lite_custom_css .='.products li{';
			$sweetsi_lite_custom_css .='border: 1px solid #767676;';
		$sweetsi_lite_custom_css .='}';
	}

	$sweetsi_lite_top_bottom_wooproducts_padding = get_theme_mod('sweetsi_lite_top_bottom_wooproducts_padding',0);
	$sweetsi_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sweetsi_lite_custom_css .='padding-top: '.esc_attr($sweetsi_lite_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($sweetsi_lite_top_bottom_wooproducts_padding).'px !important;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_left_right_wooproducts_padding = get_theme_mod('sweetsi_lite_left_right_wooproducts_padding',0);
	$sweetsi_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sweetsi_lite_custom_css .='padding-left: '.esc_attr($sweetsi_lite_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($sweetsi_lite_left_right_wooproducts_padding).'px !important;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_wooproducts_border_radius = get_theme_mod('sweetsi_lite_wooproducts_border_radius',0);
	$sweetsi_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sweetsi_lite_custom_css .='border-radius: '.esc_attr($sweetsi_lite_wooproducts_border_radius).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_wooproducts_box_shadow = get_theme_mod('sweetsi_lite_wooproducts_box_shadow',0);
	$sweetsi_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sweetsi_lite_custom_css .='box-shadow: '.esc_attr($sweetsi_lite_wooproducts_box_shadow).'px '.esc_attr($sweetsi_lite_wooproducts_box_shadow).'px '.esc_attr($sweetsi_lite_wooproducts_box_shadow).'px #e4e4e4;';
	$sweetsi_lite_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$sweetsi_lite_copyright_content_align = get_theme_mod('sweetsi_lite_copyright_content_align');
	if($sweetsi_lite_copyright_content_align != false){
		$sweetsi_lite_custom_css .='.copyright{';
			$sweetsi_lite_custom_css .='text-align: '.esc_attr($sweetsi_lite_copyright_content_align).';';
		$sweetsi_lite_custom_css .='}';
	}

	$sweetsi_lite_footer_content_font_size = get_theme_mod('sweetsi_lite_footer_content_font_size', 16);
	$sweetsi_lite_custom_css .='.copyright p{';
		$sweetsi_lite_custom_css .='font-size: '.esc_attr($sweetsi_lite_footer_content_font_size).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_copyright_padding = get_theme_mod('sweetsi_lite_copyright_padding', 15);
	$sweetsi_lite_custom_css .='.copyright{';
		$sweetsi_lite_custom_css .='padding-top: '.esc_attr($sweetsi_lite_copyright_padding).'px; padding-bottom: '.esc_attr($sweetsi_lite_copyright_padding).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_footer_widget_bg_color = get_theme_mod('sweetsi_lite_footer_widget_bg_color');
	$sweetsi_lite_custom_css .='#footer{';
		$sweetsi_lite_custom_css .='background-color: '.esc_attr($sweetsi_lite_footer_widget_bg_color).';';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_footer_widget_bg_image = get_theme_mod('sweetsi_lite_footer_widget_bg_image');
	if($sweetsi_lite_footer_widget_bg_image != false){
		$sweetsi_lite_custom_css .='#footer{';
			$sweetsi_lite_custom_css .='background: url('.esc_attr($sweetsi_lite_footer_widget_bg_image).');';
		$sweetsi_lite_custom_css .='}';
	}

	// scroll to top
	$sweetsi_lite_scroll_font_size_icon = get_theme_mod('sweetsi_lite_scroll_font_size_icon', 22);
	$sweetsi_lite_custom_css .='#scroll-top .fas{';
		$sweetsi_lite_custom_css .='font-size: '.esc_attr($sweetsi_lite_scroll_font_size_icon).'px;';
	$sweetsi_lite_custom_css .='}';

	// Slider Height 
	$sweetsi_lite_slider_image_height = get_theme_mod('sweetsi_lite_slider_image_height');
	$sweetsi_lite_custom_css .='#slider img{';
		$sweetsi_lite_custom_css .='height: '.esc_attr($sweetsi_lite_slider_image_height).'px;';
	$sweetsi_lite_custom_css .='}';

	// Display Blog Post 
	$sweetsi_lite_display_blog_page_post = get_theme_mod( 'sweetsi_lite_display_blog_page_post','In Box');
    if($sweetsi_lite_display_blog_page_post == 'Without Box'){
		$sweetsi_lite_custom_css .='.page-box{';
			$sweetsi_lite_custom_css .='border:none; margin:25px 0;';
		$sweetsi_lite_custom_css .='}';
	}

	// slider overlay
	$sweetsi_lite_slider_overlay = get_theme_mod('sweetsi_lite_slider_overlay', true);
	if($sweetsi_lite_slider_overlay == false){
		$sweetsi_lite_custom_css .='#slider img{';
			$sweetsi_lite_custom_css .='opacity:1;';
		$sweetsi_lite_custom_css .='}';
	} 
	$sweetsi_lite_slider_image_overlay_color = get_theme_mod('sweetsi_lite_slider_image_overlay_color', true);
	if($sweetsi_lite_slider_overlay != false){
		$sweetsi_lite_custom_css .='#slider{';
			$sweetsi_lite_custom_css .='background-color: '.esc_attr($sweetsi_lite_slider_image_overlay_color).';';
		$sweetsi_lite_custom_css .='}';
	}

	// site title and tagline font size option
	$sweetsi_lite_site_title_size_option = get_theme_mod('sweetsi_lite_site_title_size_option', 30);{
	$sweetsi_lite_custom_css .='.logo h1 a, .logo p a{';
	$sweetsi_lite_custom_css .='font-size: '.esc_attr($sweetsi_lite_site_title_size_option).'px;';
		$sweetsi_lite_custom_css .='}';
	}

	$sweetsi_lite_site_tagline_size_option = get_theme_mod('sweetsi_lite_site_tagline_size_option', 12);{
	$sweetsi_lite_custom_css .='.logo p{';
	$sweetsi_lite_custom_css .='font-size: '.esc_attr($sweetsi_lite_site_tagline_size_option).'px !important;';
		$sweetsi_lite_custom_css .='}';
	}

	// woocommerce product sale settings
	$sweetsi_lite_border_radius_product_sale = get_theme_mod('sweetsi_lite_border_radius_product_sale',0);
	$sweetsi_lite_custom_css .='.woocommerce span.onsale {';
		$sweetsi_lite_custom_css .='border-radius: '.esc_attr($sweetsi_lite_border_radius_product_sale).'px;';
	$sweetsi_lite_custom_css .='}';

	$sweetsi_lite_align_product_sale = get_theme_mod('sweetsi_lite_align_product_sale', 'Right');
	if($sweetsi_lite_align_product_sale == 'Right' ){
		$sweetsi_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$sweetsi_lite_custom_css .=' left:auto; right:0;';
		$sweetsi_lite_custom_css .='}';
	}elseif($sweetsi_lite_align_product_sale == 'Left' ){
		$sweetsi_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$sweetsi_lite_custom_css .=' left:0; right:auto;';
		$sweetsi_lite_custom_css .='}';
	}

	$sweetsi_lite_product_sale_font_size = get_theme_mod('sweetsi_lite_product_sale_font_size',14);
	$sweetsi_lite_custom_css .='.woocommerce span.onsale{';
		$sweetsi_lite_custom_css .='font-size: '.esc_attr($sweetsi_lite_product_sale_font_size).'px;';
	$sweetsi_lite_custom_css .='}';

	// preloader background option
	$sweetsi_lite_loader_background_color_settings = get_theme_mod('sweetsi_lite_loader_background_color_settings');
	$sweetsi_lite_custom_css .='#loader-wrapper .loader-section{';
		$sweetsi_lite_custom_css .='background-color: '.esc_attr($sweetsi_lite_loader_background_color_settings).';';
	$sweetsi_lite_custom_css .='} ';

	// woocommerce Product Navigation
	$sweetsi_lite_products_navigation = get_theme_mod('sweetsi_lite_products_navigation', 'Yes');
	if($sweetsi_lite_products_navigation == 'No'){
		$sweetsi_lite_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$sweetsi_lite_custom_css .='display: none;';
		$sweetsi_lite_custom_css .='}';
	}