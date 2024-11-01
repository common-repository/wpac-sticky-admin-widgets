<?php
/*
* Plugin Name: WPAC Sticky Admin Widgets
* Plugin URI: https://github.com/wpacademy/wpac-sticky-admin-widgets
* Author: WPacademy.PK
* Author URI: https://wpacademy.pk
* Description: Simple utility to stick your admin widget areas.
* Version: 1.0.0
* License: GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: wpacasw
* Tags: admin widgets, sticky admin widgets
*/

//If this file is called directly, abort.
if (!defined( 'WPINC' )) {
    die;
}
    
//Include Scripts & Styles
    if( !function_exists('wpac_asw_plugin_admin_scripts')) {
        
        
        function wpac_asw_plugin_admin_scripts(){
            
            //Thia Sticky Sidebar
            wp_enqueue_script('wpac-asw-stikcy-js', plugin_dir_url( __FILE__ ). 'assets/js/theia-sticky-sidebar.js', 'jQuery', '1.0.0', true );
            
            //Plugin Main JS
            wp_enqueue_script('wpac-asw-js', plugin_dir_url( __FILE__ ). 'assets/js/plugin.js', 'jQuery', '1.0.0', true );
            
        }
        add_action( 'admin_print_scripts-widgets.php', 'wpac_asw_plugin_admin_scripts' );
        
        
    }


?>
