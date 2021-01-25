<?php

/** defaultna user role za nove registrovane usere preko woocommerce add member **/
add_filter('woocommerce_new_customer_data', 'wc_assign_custom_role', 10, 1);
 
function wc_assign_custom_role($args) {
  $args['role'] = 'klikeras';
  
  return $args;
}/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	return;
}


/**
 * @desc Remove in all product type
 */
function wc_remove_all_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );


add_filter( 'wc_add_to_cart_message_html','wb_custom_add_to_cart_message', 10, 2 );
/**
 * Hide number of items added as to message when added to cart.
 *
 */
function wb_custom_add_to_cart_message( $message, $products ) {
	$titles = array();
	$count  = 0;
	$show_qty = false;

	if ( ! is_array( $products ) ) {
		$products = array( $products => 1 );
		$show_qty = false;
	}

	if ( ! $show_qty ) {
		$products = array_fill_keys( array_keys( $products ), 1 );
	}

	foreach ( $products as $product_id => $qty ) { // diff in loop, ternary operator removed
		$titles[] =  sprintf( _x( '&ldquo;%s&rdquo;', 'Item name in quotes', 'woocommerce' ), strip_tags( get_the_title( $product_id ) ) );
		$count += $qty;
	}

	$titles     = array_filter( $titles );
	$added_text = sprintf( _n( '%s has been added to your cart.', '%s have been added to your cart.', $count, 'woocommerce' ), wc_format_list_of_items( $titles ) );

	// Output success messages
	if ( 'yes' === get_option( 'woocommerce_cart_redirect_after_add' ) ) {
		$return_to = apply_filters( 'woocommerce_continue_shopping_redirect', wc_get_raw_referer() ? wp_validate_redirect( wc_get_raw_referer(), false ) : wc_get_page_permalink( 'shop' ) );
		$message   = sprintf( '<a href="%s" class="button wc-forward">%s</a> %s', esc_url( $return_to ), esc_html__( 'Continue shopping', 'woocommerce' ), esc_html( $added_text ) );
	} else {
		$message   = sprintf( '<a href="%s" class="button wc-forward">%s</a> %s', esc_url( wc_get_page_permalink( 'cart' ) ), esc_html__( 'View cart', 'woocommerce' ), esc_html( $added_text ) );
	}


	return $message;

}




add_action('woocommerce_after_add_to_cart_button','kikler_hide_team_and_other');
function kikler_hide_team_and_other() {

	global $product;

	$id = $product->get_id();
	$title = $product->get_title();

	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$last_name = $current_user->last_name;

	$team_name = $user_id . '-'. $last_name . '-'. $id . '-'. $title;
    
    echo "<style> .wc-memberships-for-teams-team-fields-wrapper {visibility: hidden; width: 0%; } .elementor-add-to-cart form{height:65px; line-height:0} .team-fields .required{visibility:hidden !important;}</style>";
	echo "<script>document.addEventListener('DOMContentLoaded', function(event){var wooButton = document.querySelector('.single_add_to_cart_button'); wooButton.classList.add('elementor-animation-float')})</script>";
	echo "<style>.woocommerce button.button:hover{background-color:#1D6772 !important; box-shadow:0 8px 24px 0 rgba(35, 127, 140, 0.42) !important;} .woocommerce button.button{box-shadow:0 8px 16px 0 rgba(35, 127, 140, 0.32);}</style>";
	echo "<script> var team_name = '".$team_name."' </script>";
	echo "<script> jQuery('#team_name').val(team_name); </script>";
	echo "<style>.woocommerce div.product.elementor .quantity + .button {margin-left:0 !important;}</style>";

}

/**
 * Auto Complete all WooCommerce orders.
 */
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) { 
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}





//$products_data = []; // Initializing

//$products = wc_get_products( ['limit' => -1] ); // Get all WC_Product objects

// Loop through products -- Preparing data to be displayed
// foreach ( $products as $product ) {
 //  $product_id = $product->get_id();

    //1. Product data as product name …
 //   $products_data[$product_id]['name'] = $product->get_name();


    //2. Average rating and rating count
//    $products_data[$product_id]['rating'] = (int) $product->get_average_rating();
//    $products_data[$product_id]['count']  = (int) $product->get_rating_count();
//$avrg = $data['rating'];
	
 
//}



//function get_star_avg_rating()
	//{
    	//global $product;
    	//$average = $product->get_average_rating();
		//$int = $average;
		//echo intval($int);
	//}



//add_shortcode('star_int', 'get_star_avg_rating');


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Vrste kursa.
	 */

	$labels = [
		"name" => __( "Vrste kursa", "astra" ),
		"singular_name" => __( "Vrsta kursa", "astra" ),
	];

	$args = [
		"label" => __( "Vrste kursa", "astra" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'vrsta', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "vrsta",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"meta_box_cb" => "post_categories_meta_box",
		'map_meta_cap' => true,
			];
	register_taxonomy( "vrsta", [ "product" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

add_action('init', 'function_to_add_author_woocommerce', 999 );


