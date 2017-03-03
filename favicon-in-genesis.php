<?php

/** Adding custom Favicon in your theme's function.php file */
add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
function custom_favicon( $favicon_url ) {
	return 'http://i.imgur.com/zV9Ttdo.png';
}

?>


