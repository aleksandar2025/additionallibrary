<?php  

 if (class_exists('acf') && class_exists('WooCommerce')) {
    	add_filter('woocommerce_product_tabs', function($tabs) {
    		global $post, $product;  // Access to the current product or post
    		
    		$custom_tab_title = get_field('naziv_upotreba', $post->ID);
     
    		if (!empty($custom_tab_title)) {
    			$tabs['awp-' . sanitize_title($custom_tab_title)] = [
    				'title' => $custom_tab_title,
    				'callback' => 'awp_custom_woocommerce_tabs',
    				'priority' => 10
    			];
    		}
    		return $tabs;
    	});
     
    	function awp_custom_woocommerce_tabs($key, $tab) {
    		global $post;
     
    		?><h2><?php echo $tab['title']; ?></h2><?php
     
    		$custom_tab_contents = get_field('nacin_upotrebe_content', $post->ID);
    		echo $custom_tab_contents;
    	}
    }


    if (class_exists('acf') && class_exists('WooCommerce')) {
    	add_filter('woocommerce_product_tabs', function($tabs) {
    		global $post, $product;  // Access to the current product or post
    		
    		$sastojci_tab_title = get_field('sastojci', $post->ID);
     
    		if (!empty($sastojci_tab_title)) {
    			$tabs['sastojci-' . sanitize_title($sastojci_tab_title)] = [
    				'title' => $sastojci_tab_title,
    				'callback' => 'sastojci_custom_woocommerce_tabs',
    				'priority' => 11
    			];
    		}
    		return $tabs;
    	});
     
    	function sastojci_custom_woocommerce_tabs($key, $tab) {
    		global $post;
     
    		?><h2><?php echo $tab['title']; ?></h2><?php
     
    		$sastojci_tab_contents = get_field('sastojci_content', $post->ID);
    		echo $sastojci_tab_contents;
    	}
    }

    if (class_exists('acf') && class_exists('WooCommerce')) {
    	add_filter('woocommerce_product_tabs', function($tabs) {
    		global $post, $product;  // Access to the current product or post
    		
    		$napomene_title_tab_title = get_field('napomene_title', $post->ID);
     
    		if (!empty($napomene_title_tab_title)) {
    			$tabs['napomene-' . sanitize_title($napomene_title_tab_title)] = [
    				'title' => $napomene_title_tab_title,
    				'callback' => 'napomene_custom_woocommerce_tabs',
    				'priority' => 12
    			];
    		}
    		return $tabs;
    	});
     
    	function napomene_custom_woocommerce_tabs($key, $tab) {
    		global $post;
     
    		?><h2><?php echo $tab['title']; ?></h2><?php
     
    		$napomene_tab_contents = get_field('napomene_content', $post->ID);
    		echo $napomene_tab_contents;
    	}
    }

    if (class_exists('acf') && class_exists('WooCommerce')) {
    	add_filter('woocommerce_product_tabs', function($tabs) {
    		global $post, $product;  // Access to the current product or post
    		
    		$informacije_tab_title = get_field('informacije_title', $post->ID);
     
    		if (!empty($informacije_tab_title)) {
    			$tabs['informacije-' . sanitize_title($informacije_tab_title)] = [
    				'title' => $informacije_tab_title,
    				'callback' => 'informacije_custom_woocommerce_tabs',
    				'priority' => 13
    			];
    		}
    		return $tabs;
    	});
     
    	function informacije_custom_woocommerce_tabs($key, $tab) {
    		global $post;
     
    		?><h2><?php echo $tab['title']; ?></h2><?php
     
    		$informacije_tab_contents = get_field('informacije_content', $post->ID);
    		echo $informacije_tab_contents;
    	}
    }

function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();

	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}

	return ! empty( $free ) ? $free : $rates;
}

add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );
