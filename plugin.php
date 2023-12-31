<?php
/**
 * Plugin Name:       Plugin Boilerplate
 * Description:       Plugin Boilerplate.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            K
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-boilerplate
 *
 */

function blocks_course_plugin_boilerplate_enqueue_assets() {
   $assets_file = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');
   wp_enqueue_script('blocks-course-plugin-boilerplate-script', plugins_url('build/index.js', __FILE__), $assets_file['dependencies'], $assets_file['version']);
   wp_enqueue_style('blocks-course-plugin-boilerplate-style', plugins_url('build/index.css', __FILE__));
}
add_action('enqueue_block_editor_assets', 'blocks_course_plugin_boilerplate_enqueue_assets');