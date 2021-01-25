<?php

add_action( 'wp_head', function () { ?>
<script>
document.addEventListener("DOMContentLoaded", function(event) {	 
		setTimeout(function dividerClass(){
			const element = document.querySelector(".dividerAnimated");
			element.classList.add("dividerMotion")
			},1000)
		
	});
	
</script>
<?php } );
