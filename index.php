<?php
/**
 * Plugin Name:       Todo List
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       todo-list
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
// function create_block_todo_list_block_init() {
// 	register_block_type( __DIR__ . '/build' );
// }
// add_action( 'init', 'create_block_todo_list_block_init' );

class AreYou{
	function __construct(){
		// add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
		add_action('init', array($this, 'adminAssets'));
	}
	function adminAssets(){
		// wp_enqueue_script('ournewblock', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks'));
		wp_register_script('ournewblock', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks'));
		register_block_type("ourplugin/are-you",array(
			'editor_script' => 'ournewblock',
			'render_callback' => array($this,'render_callback_save'),
		));
	}
	function render_callback_save($attributes){
		$html= '<div>' . $attributes['skyColor'] . '+++++ </div>';
		return $html;
	}
}
$areYou = new AreYou();