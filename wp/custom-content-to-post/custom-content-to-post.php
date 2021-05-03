<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://phpdocs.com
 * @since             1.0.0
 * @package           Custom_Content_To_Post
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Content to Post
 * Plugin URI:        https://phpdocs.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Muhammad Afzal
 * Author URI:        https://phpdocs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-content-to-post
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_CONTENT_TO_POST_VERSION', '1.0.0' );


// 1-Header/Footer Loading, Content Loading 

function Add_Content_to_Post($content){
    if(!is_page()){
		$content="<h1>This is a Starting Text</h1>".$content."<h1>This is a end Text</h1>";
		return $content;
	}
	else{
		return $content;
	}
}


add_filter('the_content','Add_Content_to_Post');


//Short Code

function Add_Short(){
	$Form="<h1>This is a shortCode Testing</h1>"."<form>";
	$Form.="<input type='text' name='txtSearch' placeholder='Search' />";
	$Form.="<input type='button' name='btnSave' value='Save' />";
	$Form.="</form>";

	return $Form;
}

add_shortcode('CustomContentCode','Add_Short');


