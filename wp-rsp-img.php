<?php
/*
Plugin Name: WP Responsive Images
Plugin URI: https://github.com/roborourke/wp-rsp-img
Description: Enhances image tags to use the optimal srcset option.
Version: 1.2.0
Author: Robert O'Rourke
Author URI: https://röb.co
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Enqueue the rsp-img.min.js script on the frontend
function wp_rsp_img_enqueue_scripts() {
    wp_enqueue_script(
        'rsp-img',
        plugins_url( 'rsp-img.min.js', __FILE__ ),
        '1.2.0',
        [ 'strategy' => 'async' ]
    );
}

add_action( 'wp_enqueue_scripts', 'wp_rsp_img_enqueue_scripts' );
add_action( 'enqueue_block_editor_assets', 'wp_rsp_img_enqueue_scripts' );
