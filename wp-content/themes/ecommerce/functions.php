<?php
add_theme_support('title-tag');

//Theme enqueue Script
function themeScripts(){
	//For theme Style
	wp_enqueue_style('bootstrap',get_theme_file_uri('/assets/css/bootstrap.min.css'),array(),'3.2.0');
	wp_enqueue_style('main',get_theme_file_uri('/assets/css/main.css'),array(),'1.4');
	wp_enqueue_style('blue',get_theme_file_uri('/assets/css/blue.css'),array(),'1.0');
	wp_enqueue_style('carousel',get_theme_file_uri('/assets/css/owl.carousel.css'),array(),'1.3.3');
	wp_enqueue_style('transitions',get_theme_file_uri('/assets/css/owl.transitions.css'),array(),'1.3.3');
	wp_enqueue_style('animate',get_theme_file_uri('/assets/css/animate.min.css'),array(),'1.0');
	wp_enqueue_style('rateit',get_theme_file_uri('/assets/css/rateit.css'),array(),'1.0');
	wp_enqueue_style('bootstrap-select',get_theme_file_uri('/assets/css/bootstrap-select.min.css'),array(),'1.6.2');
	wp_enqueue_style('font-awesome',get_theme_file_uri('/assets/css/font-awesome.css'),array(),'4.6.2');
	wp_enqueue_style('woocommerce',get_theme_file_uri('/assets/css/woocommerce.css'),array(),'1.0');
	wp_enqueue_style('stylesheet',get_stylesheet_uri());

	//for The Scripts

	wp_enqueue_script('main_js',get_theme_file_uri('/assets/js/jquery-1.11.1.min.js'),array(),'1.11.1',true);
	wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/js/bootstrap.min.js'),array(),'3.2.0',true);
	wp_enqueue_script('bootstrap-hover-dropdown',get_theme_file_uri('/assets/js/bootstrap-hover-dropdown.min.js'),array(),'2.0.11',true);
	wp_enqueue_script('carousel',get_theme_file_uri('/assets/js/owl.carousel.min.js'),array(),'1.0',true);
	wp_enqueue_script('echo',get_theme_file_uri('/assets/js/echo.min.js'),array(),'1.6.0',true);
	wp_enqueue_script('easing',get_theme_file_uri('/assets/js/jquery.easing-1.3.min.js'),array(),'1.3',true);
	wp_enqueue_script('bootstrap-slider',get_theme_file_uri('/assets/js/bootstrap-slider.min.js'),array(),'4.0.5 ',true);
	wp_enqueue_script('rateit',get_theme_file_uri('/assets/js/jquery.rateit.min.js'),array(),'1.0.21 ',true);
	wp_enqueue_script('lightbox',get_theme_file_uri('/assets/js/lightbox.min.js'),array(),'2.7.1',true);
	wp_enqueue_script('bootstrap-select',get_theme_file_uri('/assets/js/bootstrap-select.min.js'),array(),'1.6.2',true);
	wp_enqueue_script('wow',get_theme_file_uri('/assets/js/wow.min.js'),array(),'0.1.12',true);
	wp_enqueue_script('scripts',get_theme_file_uri('/assets/js/scripts.js'),array(),'1.0',true);

}
add_action('wp_enqueue_scripts','themeScripts');
//For Navigation menu
function themeMenus(){
	if (function_exists('register_nav_menu')){
		register_nav_menu('main_menu',__('Main Menu','ecommerce'));
		register_nav_menu('top_menu',__('Top Menu','ecommerce'));
	}
}
add_action('init','themeMenus');
//For Image support
add_theme_support('post-thumbnails');
set_post_thumbnail_size(320,200,true);

//For Footer Widget
function themeFooterWidgets(){
	//Widget One
	register_sidebar(array(
		'name'              =>esc_html__('Footer Widget One','ecommerce'),
		'description'       =>esc_html__('This is footer widget one','ecommerce'),
		'id'                =>'footer_widget_one',
		'before_widget'     =>'<div class="col-xs-12 col-sm-6 col-md-3">',
		'after_widget'      =>'</div>',
		'before_title'      =>'<div class="module-heading"><h4 class="module-title">',
		'after_title'       =>'</h4></div>'
	));
	//Widget Two
	register_sidebar(array(
		'name'              =>esc_html__('Footer Widget Two','ecommerce'),
		'description'       =>esc_html__('This is footer widget Two','ecommerce'),
		'id'                =>'footer_widget_two',
		'before_widget'     =>'<div class="col-xs-12 col-sm-6 col-md-3">',
		'after_widget'      =>'</div>',
		'before_title'      =>'<div class="module-heading"><h4 class="module-title">',
		'after_title'       =>'</h4></div>'
	));
	//Widget Three
	register_sidebar(array(
		'name'              =>esc_html__('Footer Widget Three','ecommerce'),
		'description'       =>esc_html__('This is footer widget Three','ecommerce'),
		'id'                =>'footer_widget_three',
		'before_widget'     =>'<div class="col-xs-12 col-sm-6 col-md-3">',
		'after_widget'      =>'</div>',
		'before_title'      =>'<div class="module-heading"><h4 class="module-title">',
		'after_title'       =>'</h4></div>'
	));
	//Widget Four
	register_sidebar(array(
		'name'              =>esc_html__('Footer Widget Four','ecommerce'),
		'description'       =>esc_html__('This is footer widget Four','ecommerce'),
		'id'                =>'footer_widget_four',
		'before_widget'     =>'<div class="col-xs-12 col-sm-6 col-md-3">',
		'after_widget'      =>'</div>',
		'before_title'      =>'<div class="module-heading"><h4 class="module-title">',
		'after_title'       =>'</h4></div>'
	));
}
add_action('widgets_init','themeFooterWidgets');
//Woocommerce Support
function themeWooCommerceSupport(){
	add_theme_support('woocommerce');
}
add_action('after_setup_theme','themeWooCommerceSupport');

//Remove Breadcrumb
function removeBreadcrumb(){
	remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20,0);
}
add_action('init','removeBreadcrumb');
//Change Product row from 4 to 3
if (!function_exists('loop_column_3')){
	function loop_column_3(){
		return 3;
	}
}
add_filter('loop_shop_columns','loop_column_3');