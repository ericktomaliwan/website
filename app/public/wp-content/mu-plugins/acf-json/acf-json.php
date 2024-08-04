<?php
/**
 * Plugin Name: ACF JSON
 * Author: Erick Tomaliwan
 * Description: Load JSON files in Must Use. 
 */

add_filter('acf/settings/save_json', function() {
	return dirname(__FILE__);
});

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = dirname(__FILE__);
    // return
    return $paths;
}
