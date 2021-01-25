<?php

add_action( 'wp_head', function () { ?>
<style>

	
	.registerButton {
		padding: 15px 10px 15px 10px;
		background-color: #237F8C;
		color: #ffffff;
		box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);
		font-family: "Rubick", Sans-serif;
	}
	.zuta .elementor-widget-container {
		background-color: #D1C66C;
	}
	.crvena .elementor-widget-container{
		background-color: #EC7557;
	}
	
	.siva .elementor-widget-container{
		background-color: #888888;
	}
	
	.pageRating .elementor-star-rating__title{
		color:#ffffff !important;
	}
	
	.woocommerce-review-link{
		display:none;
	}
	
	.formDugme .elementor-button{
		box-shadow: 0px 4px 8px 0px rgba(35, 127, 140, 0.32);
	}
	
	.flipBoxButton .elementor-flip-box__button{
		padding: 15px 0 15px 0 !important;
	}
	
	.Da {
		visibility:hidden;
	}
	
	.Ne{
		visibility: visible;
	}
	
	.woocommerce-MyAccount-navigation-link--edit-address {
		display: none !important;
	}
	
	.searchandfilter input[type="text"]{
    display: block !important;
    width: 103%;
    background: #ffffff;
    border: 0px;
    }
	
	.searchandfilter li{
    display: block !important;
	}
	
	.searchandfilter input[type="submit"]{
    display:none !important;
    width: 0% !important;
    margin: 0 !important;
    padding: 0 !important;
	}
	
	.searchandfilter ul{
    margin: 0 !important;
    display: block;
	}
	
	form input::-webkit-validation-bubble-message, 
form select::-webkit-validation-bubble-message,
form textarea::-webkit-validation-bubble-message {
    display:none;
} 

	.woocommerce-MyAccount-navigation-link--downloads {
		display:none !important;
	}
	label[for~="wcpv-vendor-description-public"]{
		display:none !important;
	}
	
	.woocommerce-MyAccount-navigation-link--my-membership-notes{
		display:none;
	}
	
	.woocommerce-MyAccount-navigation-link--my-membership-discounts{
		display:none;
	}
	
	.woocommerce-MyAccount-navigation-link--my-membership-products{
		display:none;
	}
	
/*	.hiddenButton .btn-join{
		display:none !important;
	}*/
	
	.woocommerce-account-join-team .woocommerce-privacy-policy-text p{
		margin-top: 100px !important;
	}
	
	#wp-comment-cookies-consent{
		display:block;
		margin-top:100px;
	}
	
	@media only screen and (max-width: 600px) {
  #wp-comment-cookies-consent {
			margin-top:20px;
		}
</style>
<?php } );

