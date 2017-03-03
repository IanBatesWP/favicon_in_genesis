<?php

/** Adding custom Favicon */
add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
function custom_favicon( $favicon_url ) {
	return 'http://i.imgur.com/zV9Ttdo.png';
}

?>


