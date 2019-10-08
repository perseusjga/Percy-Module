<?php
/**
 * Plugin Name: Beaver Builder Custom Modules
 * Plugin URI: http://www.wpbeaverbuilder.com
 * Description: An example plugin for creating custom builder modules.
 * Version: 2.0
 * Author: The Beaver Builder Team
 * Author URI: http://www.wpbeaverbuilder.com
 */
define( 'BB_PERCY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_PERCY_MODULES_URL', plugins_url( '/', __FILE__ ) );


function my_load_module_examples() {
    if ( class_exists( 'FLBuilder' ) ) {
        
        global $customDIR;
        $customDIR = 'custom';
        
        
        require_once ($customDIR . '/custom.php');
    }
}

add_action('init', 'my_load_module_examples');