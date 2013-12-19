<?php
/*
Plugin Name: Big Link Block
Plugin URI: https://github.com/melek/Big-Link-Block
Description: 
This block is basically a large button. Clicking anywhere on the block will follow a link. 
It was specifically designed for a block with a background image with a partially transparant 
foreground over so that on mouse-hover the foreground can vanish smoothly. The effect is that 
of a 'light up' rollover. Otherwise quite similar to the 'custom code' block.

Forked from the 'Headway Example Block' on GitHub: https://github.com/headwaythemes/Headway-Block-Example

Version: 0.03a
Author: Lionel Di Giacomo
Author URI: http://digiacom.wordpress.com
License: GNU GPL v2
*/

define('BIG_LINK_BLOCK_VERSION', '0.03');
 
add_action('after_setup_theme', 'big_link_block_register');
function big_link_block_register() {

	if ( !class_exists('Headway') )
		return;
	
	require_once 'block.php';
	require_once 'block-options.php';

	return headway_register_block('BigLinkBlock', plugins_url(false, __FILE__));

}


/**
 * If you plan on adding your block to Headway Extend, then this will be the code that will enable auto-updates for the block/plugin.
 * (I don't know that they'll want it, but why not.)
 **/
add_action('init', 'big_link_block_extend_updater');
function big_link_block_extend_updater() {

	if ( !class_exists('HeadwayUpdaterAPI') )
		return;

	$updater = new HeadwayUpdaterAPI(array(
		'slug' => 'big-link-block',
		'path' => plugin_basename(__FILE__),
		'name' => 'Big Link Block',
		'type' => 'block',
		'current_version' => BIG_LINK_BLOCK_VERSION
	));

}