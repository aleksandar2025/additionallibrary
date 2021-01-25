<?php
add_action( 'wp_head', function () { ?>
<style>
	.elementor-flip-box__layer{
		transition: all 0.2s ease-in-out;
	}
	/* divider classes */	
	.dividerMotion .elementor-widget-container .elementor-divider .elementor-divider-separator {
		animation: divider;
		animation-duration: 1.5s;
		width:100px;
	}

	@keyframes divider{
    	0%{
        	width:0px;
        
    	}
    	100%{
        	width:100px;

    	}
	}
	
	.circleTwo circle{
    	fill:#02D076 !important;
	}
	.circleThree circle{
    	fill:#02CFD0 !important;
	}
	
	.circleFour circle{
		fill: #EB653B !important;
	}

	
	.placeno .elementor-widget-container {
		background-color: #0F0A46 !important;
	}
	
	.zavrseno .elementor-widget-container{
		background-color:#666666 !important;
	}

	.besplatno .elementor-widget-container{
		background-color:#02D076 !important;
	}

	.blogColumn .elementor-column-wrap{
		border-radius: 16px 0 0 16px;
	}

	.at-icon-wrapper{
		background-color: #0F0A46 !important;
	}

	.blue {
		background-color: #0F0A46;
		border-radius: 4px;
	}

	.green{
		background-color:#02D076;
		border-radius: 4px;
	}

	.orange{
		background-color:#EB653B;
		border-radius: 4px;
	}

	.eael-creative-button {
		text-decoration:none !important;
	}
	/* slider navigacija fix za mobilnu verziju */
@media only screen and (max-width: 677px) {
 .blogFix .elementor-swiper-button-prev{
	left:0 !important;
	box-shadow: 0 0 0 0 rgba(0,0,0,0.0);
	border-radius:0;
	color: #ffffff;

}
	.blogFix .elementor-swiper-button-next {
		right:0 !important;
		box-shadow: 0 0 0 0 rgba(0,0,0,0.0);
		border-radius:0;
		color: #ffffff;

	}
	.elementor-swiper-button{
		top: 35% !important;		
	}
}
	
		/* slider navigacija fix za tablet verziju */
	@media only screen 
  and (min-device-width: 678px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 1) {
	 .blogFix .elementor-swiper-button-prev{
	left:0 !important;
	box-shadow: 0 0 0 0 rgba(0,0,0,0.0);
	border-radius:0;
	color: #ffffff;

}
	.blogFix .elementor-swiper-button-next {
		right:0 !important;
		box-shadow: 0 0 0 0 rgba(0,0,0,0.0);
		border-radius:0;
		color: #ffffff;

	}
	.elementor-swiper-button{
		top: 35% !important;		
	}
}
	.blogFix .elementor-swiper-button-prev{
		box-shadow: 0 0 12px 2px rgba(0,0,0,0.09);
		padding:10px;
		border-radius:100%;

	}
	
.blogFix .elementor-swiper-button-next{
		box-shadow: 0 0 12px 2px rgba(0,0,0,0.09);
		padding:10px;
		border-radius:100%;

	}

	
	@media only screen and (min-width: 1025px) {
		.blogFix .elementor-swiper-button-next{
			color:#0F0A46;
		}
		.blogFix .elementor-swiper-button-prev{
			color:#0F0A46;
		}
	}

	.coworking .elementor-icon{
		padding: 20px;
		box-shadow: 0 5px 12px 0 rgba(0,0,0,0.16);
		border-radius: 100%;
	}
	/* vidljivost ikonica na stranici clanova tima */
	.Da{
		display: visible;
	}
	.Ne{
		display:none;
	}
	
	/* focus fix za dugmice "vidi vise" u boxovima */
	.box a:focus {
		background-color: rgba(0,0,0,0.0);
	}
	
	/*advanced tabs za single clanove i single tim fix*/
	
	.singleTim .eael-advance-tabs .eael-tabs-nav li{
    flex: none;
    padding: 10px 0 10px 0 !important;
    margin: 0 40px 0 0 !important;
	}
	
	.socialIconFix .elementor-social-icon{
		padding-left:0 !important;
	}
</style>
<?php } );
