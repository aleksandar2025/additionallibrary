<?php

/**
 * Aleksandar Digivox
 * woocommerce dodatni styling
 */


add_action('wp_head', 'alek_cart_still');

function alek_cart_still(){
	if(is_cart()==true){
		echo'<style>
				.woocommerce-shipping-destination{
					display: none;
				}
				
				
				.woocommerce-shipping-calculator{ 
					display:none;
				}
				
				.checkout-button{
					background-color:#669ad2 !important;
				}
		</style>';
	}
}

add_action('wp_head','quadlayers_checkout_style');

function quadlayers_checkout_style(){
         if(is_checkout()==true){

                 echo '<style>
				 
.woocommerce-checkout.full-width-content .content { 
max-width: 100%; 
} 

#place_order{
background:linear-gradient(38deg, rgb(102, 154, 210) 0%, rgb(102, 154, 210) 61%, rgb(57, 121, 214) 100%);
} 

.woocommerce-input-wrapper{
width:100%; 
padding-top:10px; 
padding-botton:10px;
} 

#billing_email{
width:100% !important;
} 
				 
#billing_phone{
width:100% !important;
} 				 

.woocommerce-input-wrapper input{
padding-left:10px;border-radius: 6px; 
box-shadow: 0 8px 12px 2px rgba(0,0,0,0.16); 
padding-top:10px; 
padding-bottom:10px; 
border:1px solid #fdfdfd;
} 
				 
#order_review_heading{
	margin-top:30px;
} 

.text li {
    list-style-type: none !important;
}

.woocommerce-terms-and-conditions-wrapper{
	display:block;
	width: 100%;
}

.cart-subtotal{
	display:none;
}

textarea{
	padding-left:10px;border-radius: 6px; 
	box-shadow: 0 8px 12px 2px rgba(0,0,0,0.16) !important; 
	padding-top:10px; 
	padding-bottom:10px; 
	border:1px solid #fdfdfd;
}

<style>';
         }
}

 
add_action( 'woocommerce_before_single_product', 'pokreni_za_sve_proizvode' );
 
function pokreni_za_sve_proizvode() {
if ( is_single()==true ){
  
  echo '<style>
  	
	.single_add_to_cart_button{
		background: linear-gradient(38deg, rgb(102, 154, 210) 0%, rgb(102, 154, 210) 61%, rgb(57, 121, 214) 100%);
	}
  	
	.woocommerce-Price-amount{
		color:rgb(57, 121, 214);
		font-weight: bold;
		text-decoration: none;
		font-size:34px !important;
		text-shadow: 1px 1px 2px rgba(102, 154, 210,0.3);
	}
	
	.single_add_to_cart_button{
		background-color:rgb(57, 121, 214) !important;
	}
	
	.disabled{
		background-color:rgb(57, 121, 214) !important;
	}
	
/*	#tab-title-additional_information{
		display:none !important;
	} */
	.single-product .product .summary { 
		width: auto !important; 
		float:none !important;
		text-align:left;
	}
	.single_add_to_cart_button {
		text-align:left !important;
		right:auto !important;
	}
	
	.woocommerce div.product form.cart .button{
		/*float:none;*/
		margin-top: 30px;
	}
	
	.product{
		padding: 50px 140px 50px 140px;
		box-shadow: 0 6px 16px 2px rgba(0,0,0,0.16);
		border-radius: 16px;
	}
	
	@media only screen

  and (max-width: 768px) {

  .product{
  	padding: 50px 40px 50px 40px;
  }

}

	@media only screen

  and (max-width: 360px) {

  .product{
  	padding: 50px 20px 50px 20px;
  }

}

.product_meta{
	display:none;
}

.cart{
	text-align: center;
}

.price{
	display:none;
}

table td{
	border: none;
}

.woocommerce table.shop_attributes th{
	padding: 20px 8px 20px 8px;
	border-bottom: 1px solid #669ad2;
	background: #ffffff !important;
}

.woocommerce table.shop_attributes{
	border-top: 1px solid #669ad2;
}

.woocommerce table.shop_attributes td{
	border-bottom: 1px solid #669ad2;
	background: #ffffff !important;
} 

.attributeList li{
	 list-style-type: none;
	 
}

.attributeList{
	margin: 0 0 !important;
}

.accordion-content h2 {
	margin: 0 0 0 0 !important;
	display:none;
}

body .accordion-header span{
	font-size: 16px;
	font-family:Capriola, sans-serif;
	color:#669ad2;
}

.onsale{
  	display:none;
  }
  
.taxNotice{
	font-size: 12px;
	margin-bottom:0 !important;
	text-align:left;
}

.variations .label{
	text-align: left;
	width: 150px;
}

  </style>';
}
	
}

add_action('woocommerce_before_main_content', 'za_shop_i_product_arhive', 10);
	
	function za_shop_i_product_arhive(){
		if ( is_shop()==true || is_product_category()==true || is_product_tag()==true){
			echo '<style>
				.woocommerce-loop-product__title{
    				text-align:center !important;
					min-height: 70px;
					
				}

				.price{
    				text-align:center !important;
    				font-size: 24px !important;
    				color:#007bff !important;
				}

				.woocommerce a.button {
					text-align:center !important;
					right:auto !important;
					float:none;
					
					background-color:#007bff ;
					color: #ffffff;
					border: 1px solid #007bff;
				}

				.woocommerce a.button:hover{
					background-color:#ffffff ;
					color: #007bff;
					border: 1px solid #007bff;
				}
				
				.woocommerce-breadcrumb{
					display:none !important;
				}
				
				#main{
					padding:0 !important;
				}
				
				ul.products li{
    				text-align: center
				}
				
				.product{
					box-shadow: 0 0 32px 2px rgba(0,0,0,0.2);
					padding: 20px 10px 30px 10px !important;
					border-radius: 12px;
				}
				
			</style>';
			
		}
	}



add_filter( 'woocommerce_is_sold_individually', '__return_true' );

    add_filter('woocommerce_checkout_fields', function($fields) {
    	$fields['billing']['billing_phone']['label'] = __('Broj telefona', 'textdomain');
		$fields['billing']['billing_phone']['class'] = ['form-row form-row-first validate-required validate-phone'];
		$fields['billing']['billing_email']['class'] = ['form-row form-row-last validate-required validate-email'];
		
    	return $fields;
    });



 
function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
    remove_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );

add_action( 'woocommerce_after_shop_loop_item_title', 'acf_template_loop_product_meta', 20 );
function acf_template_loop_product_meta() {
    global $product;

    if ( $datum_pocetka  = get_field('datum_pocetka', $product->get_id()) ) {
        echo '<p style="text-align:center;"><strong style="display:inline-block;">'. __("Početak:") . '</strong> ' . $datum_pocetka . '</p>';
    }
}



function acf_single_product_datum(){
	    global $product;

    if ( $datum_pocetka  = get_field('datum_pocetka', $product->get_id()) ) {
        echo '<p style="text-align:left;"><strong style="display:inline-block;">'. __("Početak:") . '</strong> ' . $datum_pocetka . '</p>';
    }
	if ( $trajanje  = get_field('trajanje', $product->get_id()) ) {
        echo '<p style="text-align:left;"><strong style="display:inline-block;">'. __("Trajanje:") . '</strong> ' . $trajanje . '</p>';
    }
	if ( $dostupni_stupnjevi_u_tecaju  = get_field('dostupni_stupnjevi_u_tecaju', $product->get_id()) ) {
        echo '<p style="text-align:left;"><strong style="display:inline-block;">'. __("Dostupni stupnjevi u tečaju:") . '</strong> ' . $dostupni_stupnjevi_u_tecaju . '</p>';
    }
	if ( $certifikat  = get_field('certifikat', $product->get_id()) ) {
        echo '<p style="text-align:left;"><strong style="display:inline-block;">'. __("Certifikat:") . '</strong> ' . $certifikat . '</p>';
    }
	
	echo '<p style="display:inline-block; margin-right: 10px; margin-bottom: 0px !important;">Jednokratna uplata: </p>';
}
add_action('woocommerce_single_product_summary', 'acf_single_product_datum', 20);


function get_Product_Price(){
	global $product;
	echo '<div style="display:inline-block;">'.$product->get_price_html().'</div>';
	echo '<p class="taxNotice">Cijena uključuje PDV</p>';
}

add_action('woocommerce_single_product_summary', 'get_Product_Price', 23);



add_filter( 'woocommerce_loop_add_to_cart_link', 'zamijeni_dugme', 10, 2 );
function zamijeni_dugme( $button, $product  ) {

    if( $product->is_type( 'variable' ) ) return $button;
   
	$button_text = __( "Saznaj više", "woocommerce" );

    return '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action('template_redirect', 'remove_shop_breadcrumbs' );
function remove_shop_breadcrumbs(){
 
    if (is_product()==true)
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
 
}

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );



// grab attributes

function cw_woo_attribute(){
    global $product;
    $attributes = $product->get_attributes();
    if ( ! $attributes ) {
        return;
    }
    $display_result = '';
    foreach ( $attributes as $attribute ) {
        if ( $attribute->get_variation() ) {
            continue;
        }
        $name = $attribute->get_name();
        if ( $attribute->is_taxonomy() ) {
            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
            $cwtax = $terms[0]->taxonomy;
            $cw_object_taxonomy = get_taxonomy($cwtax);
            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                $tax_label = $cw_object_taxonomy->labels->singular_name;
            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                $tax_label = $cw_object_taxonomy->label;
                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    $tax_label = substr( $tax_label, 8 );
                }
            }
            $display_result .= $tax_label . ': ';
            $tax_terms = array();
            foreach ( $terms as $term ) {
                $single_term = esc_html( $term->name );
                array_push( $tax_terms, $single_term );
            }
            $display_result .= implode(', ', $tax_terms) .  '<br />';
        } else {
            $display_result .= '<li style="padding-top: 10px; padding-bottom:10px; border-bottom: 1px solid #669ad2;"><span style="font-size:16px; color:#669ad2; font-family: Capriola, sans-serif;">'. $name . '</span>: ' . esc_html( implode( ', ', $attribute->get_options() ) ) . '</li><br />';
            
        }
    }
	echo '<h2>Termini nastave</h2>';
    echo '<div style="display:block; margin-top:30px;"><ul class="attributeList">'.$display_result.'</ul></div>';
}
add_action( 'woocommerce_after_single_product_summary', 'cw_woo_attribute', 10 );

add_filter( 'woocommerce_variable_sale_price_html', 
'lw_variable_product_price', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 
'lw_variable_product_price', 10, 2 );

function lw_variable_product_price( $v_price, $v_product ) {

// Product Price
$prod_prices = array( $v_product->get_variation_price( 'min', true ), 
                            $v_product->get_variation_price( 'max', true ) );
$prod_price = $prod_prices[0]!==$prod_prices[1] ? sprintf(__('%1$s', 'woocommerce'), 
                       wc_price( $prod_prices[0] ) ) : wc_price( $prod_prices[0] );

// Regular Price
$regular_prices = array( $v_product->get_variation_regular_price( 'min', true ), 
                          $v_product->get_variation_regular_price( 'max', true ) );
sort( $regular_prices );
$regular_price = $regular_prices[0]!==$regular_prices[1] ? sprintf(__('%1$s','woocommerce')
                      , wc_price( $regular_prices[0] ) ) : wc_price( $regular_prices[0] );

if ( $prod_price !== $regular_price ) {
$prod_price = '<del>'.$regular_price.$v_product->get_price_suffix() . '</del> <ins>' . 
                       $prod_price . $v_product->get_price_suffix() . '</ins>';
}
return $prod_price;
}

add_filter( 'woocommerce_variation_option_name', 'display_price_in_variation_option_name' );

function display_price_in_variation_option_name( $term ) {
    global $wpdb, $product;

    if ( empty( $term ) ) return $term;
    if ( empty( $product->id ) ) return $term;

    $id = $product->get_id();

    $result = $wpdb->get_col( "SELECT slug FROM {$wpdb->prefix}terms WHERE name = '$term'" );

    $term_slug = ( !empty( $result ) ) ? $result[0] : $term;

    $query = "SELECT postmeta.post_id AS product_id
                FROM {$wpdb->prefix}postmeta AS postmeta
                    LEFT JOIN {$wpdb->prefix}posts AS products ON ( products.ID = postmeta.post_id )
                WHERE postmeta.meta_key LIKE 'attribute_%'
                    AND postmeta.meta_value = '$term_slug'
                    AND products.post_parent = $id";

    $variation_id = $wpdb->get_col( $query );

    $parent = wp_get_post_parent_id( $variation_id[0] );

    if ( $parent > 0 ) {
         $_product = new WC_Product_Variation( $variation_id[0] );
         return $term . ' (' . wp_kses( woocommerce_price( $_product->get_price() ), array() ) . ')';
    }
    return $term;

}
