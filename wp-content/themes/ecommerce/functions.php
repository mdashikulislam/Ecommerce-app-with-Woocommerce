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
	remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
}
add_action('init','removeBreadcrumb');
//Change Product row from 4 to 3
if (!function_exists('loop_column_3')){
	function loop_column_3(){
		return 3;
	}
}
add_filter('loop_shop_columns','loop_column_3');
//Woo Commerce Breadcrumb customize
function themeWoocommerceBreadcrumb(){
	return array(
		'delimiter'=>'&#47',
		'wrap_before'=>'<ul class="list-inline list-unstyled"><li>',
		'wrap_after'=>'</li></ul>',
		'before'=>' ',
		'after'=>' ',
		'home'=>_x('Home','breadcrumb','woocommerce'),

	);
}
add_filter('woocommerce_breadcrumb_defaults','themeWoocommerceBreadcrumb');

//Woocommerce Shop product filter remove
function shopResulutFilterRemove(){
	remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
	remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);
}
add_action('init','shopResulutFilterRemove');
//Remove Pagination
function shopPaginationRemove(){
	remove_action('woocommerce_after_shop_loop','woocommerce_pagination',10);
}
add_action('init','shopPaginationRemove');
//Custom pagination
function customPagination(){
	global $wp_query;

	if ( $wp_query->max_num_pages <= 1 ) return;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
		'base'    	=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'  	=> '?paged=%#%',
		'current' 	=> max( 1, get_query_var('paged') ),
		'total'   	=> $wp_query->max_num_pages,
		'type'    	=> 'array',
		'prev_next' => true,
		'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
		'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
	) );

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination-container"><ul class="list-inline list-unstyled">';
		foreach ( $pages as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div>';
	}
}

/**
 * product per page show dorpdown
 */
function ecom_woocommerce_catalog_page_ordering() {
	?>
	<?php echo '<div class="lbl-cnt"> <span class="lbl">Show' ?>
	<form action="" method="POST" name="results" class="woocommerce-ordering">
		<select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
			<?php

			//Get products on page reload
			if  (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] <> $_POST['woocommerce-sort-by-columns']))) {
				$numberOfProductsPerPage = $_POST['woocommerce-sort-by-columns'];
			} else {
				$numberOfProductsPerPage = $_COOKIE['shop_pageResults'];
			}

			//  This is where you can change the amounts per page that the user will use  feel free to change the numbers and text as you want, in my case we had 4 products per row so I chose to have multiples of four for the user to select.
			$shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
				//Add as many of these as you like, -1 shows all products per page
				//  ''       => __('Results per page', 'woocommerce'),
				'20' 		=> __('20', 'woocommerce'),
				'5' 		=> __('5', 'woocommerce'),
				'10' 		=> __('10', 'woocommerce'),
				'-1' 		=> __('All', 'woocommerce'),
			));

			foreach ( $shopCatalog_orderby as $sort_id => $sort_name )
				echo '<option value="' . $sort_id . '" ' . selected( $numberOfProductsPerPage, $sort_id, true ) . ' >' . $sort_name . '</option>';
			?>
		</select>
	</form>

	<?php echo ' </span></div>' ?>
	<?php
}

// now we set our cookie if we need to
function dl_sort_by_page($count) {
	if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
		$count = $_COOKIE['shop_pageResults'];
	}
	if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
		setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time()+1209600, '/', 'www.your-domain-goes-here.com', false); //this will fail if any part of page has been output- hope this works!
		$count = $_POST['woocommerce-sort-by-columns'];
	}
	// else normal page load and no cookie
	return $count;
}

add_filter('loop_shop_per_page','dl_sort_by_page');

////Shop Custom Odering
function woocommerceThemeCustomCatalogOrderBy($sortBy){
    $sortBy['date']= 'Position';
    $sortBy['price']= 'Price: Lowest first';
    $sortBy['price-desc']= 'Price: Highest first';
    $sortBy['menu_order']= 'Product Name: A to Z';
    unset($sortBy['popularity']);
    unset($sortBy['rating']);
    return $sortBy;
}
add_filter('woocommerce_catalog_orderby','woocommerceThemeCustomCatalogOrderBy');
