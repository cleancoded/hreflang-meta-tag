<?php
   /*
   Plugin Name: Meta Tag hreflang
   Plugin URI:  https://github.com/cleancoded/hreflang-meta-tag
   Description: Insert the hreflang meta tag into your wordpress site header 
   Version: 1.0
   Author: Cleancoded
   Author URI:  https://cleancoded.com/
   Text Domain: cf7-repeater-fields
*/


function hreflang(){

	//Check if is home or subsection
	//In home pages the canonical URL is empty
	if (wp_get_canonical_url() == "" || wp_get_canonical_url() == NULL){
		$site_url = get_site_url();
	}else{
		$site_url = wp_get_canonical_url();
	}

	echo "<link rel='alternate' href='".$site_url."' hreflang='".get_locale()."' />";
}

add_action("wp_head", "hreflang");


?>
