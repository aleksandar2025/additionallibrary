<?php


function load_get_star_avg_rating()
	{
    	global $product;
		$int = 5;
		if(is_object($product)) {
    		$average = $product->get_average_rating();
			if($average > 0) {
				$int = floatval($average);
			} else {
				$int = 0;
			}
		}
		return $int;
	}

add_shortcode('star_int', 'load_get_star_avg_rating');


function doomer_product_sold_count() {
	global $product;
	$units_sold = 5;
		if(is_object($product)){
			$total = $product->get_total_sales();
				if($total > 0){
					$units_sold = floatval($total);
				}else{
					$units_sold = 0;
				}
			return $units_sold;
	
	
	}
}

add_shortcode('unit_sold_count', 'doomer_product_sold_count');




