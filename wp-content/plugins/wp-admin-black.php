<?php
/*
Plugin Name: Black Style Administration
Plugin URI: http://barunsingh.com/software/wp-barunio-admin/
Description: Changes the visual design of the Wordpress administration area to the "Black" theme.
Author: Jose Diaz-Gonzalez
Version: .1
Author URI: http://blog.savant.be/
*/ 

function wp_admin_black_css() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_settings('siteurl') . '/wp-content/plugins/wp-admin-black/wp-admin.css?v=1" />';
}

add_action('admin_head', 'wp_admin_black_css');
add_action('admin_notices','wp_admin_black_submenu_page',499);
add_action('admin_footer','wp_admin_black_closepage',500);


function wp_admin_black_submenu_page() {
	global $menu, $submenu, $parent_file;

	if ( isset($submenu["$parent_file"]) ) {
		if (sizeof($submenu["$parent_file"]) > 0)
			echo '<div class="submenu_page">';
		else 
			echo '<div class="nosubmenu_page">';
	} else 
		echo '<div class="nosubmenu_page">';

}


function wp_admin_black_closepage() {
	echo '</div> <!-- end the submenu_page / nosubmenu_page div -->';
}
?>