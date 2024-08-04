<?php

/**
 * Plugin Name: Plugin Loader
 * Author: Erick Tomaliwan
 * Description: Loads the plugins that are within folders
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

require(WPMU_PLUGIN_DIR . '/acf-json/acf-json.php');