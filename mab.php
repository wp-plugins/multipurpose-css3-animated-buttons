<?php

/*
	Plugin Name: Multipurpose CSS3 Animated Buttons
	Plugin URI: http://www.sebla.dk/mab
	Description: Replace your old fashioned buttons with Multipurpose CSS3 Animated Buttons.
	Author: Erk
	Author URI: http://www.sebla.dk/mab/contact
	License: GPL2
	Version: 0.0.1
*/

/* 
	Copyright 2012-2013  Erk  (email : erkishei at gmail.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
	If there are erroneous and/or non-standard coding in this plugin, please contact me via : multipurpose.ab at gmail.com
	I'm a novice developer but I'm doing my best to follow the rules from (http://make.wordpress.org/core/handbook/coding-standards/)
	MULTIPURPOSE CSS3 ANIMATED BUTTONS.
*/

/**
* ADMIN NOTICE
*
*/
add_action( 'admin_notices', 'mab_admin_notice' );
function mab_admin_notice(){
     if ( $GLOBALS['mab_first_settings'] == '1' )
          echo '<div class="updated settings-error" id="setting-error-settings_updated"><p>You should configure "Multipurpose CSS3 Animated Buttons" ' . '<a href="plugins.php?page=mab_plugin_settings">'.__("Settings.", "mab").'</a></p></div>';
}

/**
* Add Settings link to plugins
*
*/

  function mab_add_settings_link($links, $file) {
    static $this_plugin;
    if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);
    if ($file == $this_plugin){
      $settings_link = '<a href="plugins.php?page=mab_plugin_settings">'.__("Settings", "mab").'</a>';
      array_unshift($links, $settings_link);
    }
    return $links;
   }
   
   add_filter('plugin_action_links', 'mab_add_settings_link', 10, 2 );

	//DECLARATIONS

	$basic_settings = get_option( 'mab_plugin_basic_settings' );
	$advanced_settings = get_option( 'mab_plugin_advanced_settings');
	$info_settings = get_option( 'mab_plugin_info_settings' );
	$mab_first_settings = $basic_settings['first'];
	$mab_reset_settings = $info_settings['reset_settings'];
	$basic_button_count = $basic_settings['button_count'];
	$basic_button_type = $basic_settings['button_type'];
	$basic_link_font_size = $basic_settings['link_font_size'];		
	$basic_link_font_color = $basic_settings['link_font_color'];  
	$basic_link_1 = $basic_settings['link_1'];
	$basic_link_2 = $basic_settings['link_2'];
	$basic_link_3 = $basic_settings['link_3'];
	$basic_link_4 = $basic_settings['link_4'];
	$basic_link_5 = $basic_settings['link_5'];
	$basic_link_1_title = $basic_settings['link_1_title'];
	$basic_link_2_title = $basic_settings['link_2_title'];
	$basic_link_3_title = $basic_settings['link_3_title'];
	$basic_link_4_title = $basic_settings['link_4_title'];
	$basic_link_5_title = $basic_settings['link_5_title'];
	$basic_facebook  = $basic_settings['facebook'];
	$basic_facebook_app_id  = $basic_settings['facebook_app_id'];
	$basic_twitter	 = $basic_settings['twitter'];
	$basic_google = $basic_settings['google'];
	$basic_pinterest = $basic_settings['pinterest'];
	$basic_feed = $basic_settings['feed'];
	$basic_feed_src = $basic_settings['feed_src'];
	$basic_gradient_color_1 = $basic_settings['gradient_color_1'];
	$basic_gradient_color_2 = $basic_settings['gradient_color_2'];
	$basic_shadow_color = $basic_settings['shadow_color'];
	$advanced_toggle_cookies = $advanced_settings['toggle_cookies'];
	$advanced_toggle_custom_css = $advanced_settings['toggle_custom_css'];
	$advanced_custom_css = $advanced_settings['custom_css'];
	$advanced_toggle_social_js	= $advanced_settings['toggle_social_js'];
	$advanced_toggle_delete_settings	= $advanced_settings['toggle_delete_settings'];
	$advanced_toggle_footer_link	= $advanced_settings['toggle_footer_link'];
	$cookie3d1 = $_COOKIE['button-1-visited'];
	$cookie3d2 = $_COOKIE['button-2-visited'];
	$cookie3d3 = $_COOKIE['button-3-visited'];
	$cookie3d4 = $_COOKIE['button-4-visited'];
	$cookie3d5 = $_COOKIE['button-5-visited'];
	$cookie3d6 = $_COOKIE['button-6-visited'];
	$cookie3d7 = $_COOKIE['button-7-visited'];
	$cookie3d8 = $_COOKIE['button-8-visited'];
	$cookie3d9 = $_COOKIE['button-9-visited'];
	$cookie3d0 = $_COOKIE['button-0-visited'];

	//RESET SETTINGS

	if ( true == $GLOBALS['mab_reset_settings'] ) {
		mab_reset();
		$targetURL = mab_current_url();
		header('Location: ' . $targetURL . '&mab_reset=true' );
	}

	//ACTIVATION & DEACTIVATION HOOKS

	register_deactivation_hook( __FILE__, 'mab_deactivate' );
	register_activation_hook( __FILE__, 'mab_activate' );
	
	function mab_deactivate() {
		if ( true == $GLOBALS['advanced_toggle_delete_settings'] ) {
			delete_option( 'mab_plugin_basic_settings' );
			delete_option( 'mab_plugin_advanced_settings' );
			delete_option( 'mab_plugin_info_settings' );
		}
	}
	
	function mab_activate() {
	if ( empty( $GLOBALS['mab_first_settings'] ) ) {
		$bs = array(
		  'first'              =>	'1',
			'button_count'       =>	'5',
			'button_type'			   =>	'social',
//    'link_font_size'		 =>	'',
			'link_font_color'		 =>	'333333',
/*    'link_1'				     =>	'',
			'link_2'			       =>	'',
			'link_3'				     =>	'',
			'link_4'					   =>	'',
			'link_5'					   =>	'',
			'link_1_title'       =>	'',
			'link_2_title'       =>	'',
			'link_3_title'       =>	'',
			'link_4_title'       =>	'',
			'link_5_title'       =>	'',
			'facebook'           =>	'',
*/		'facebook_app_id'    =>	'xxxxxxxxxxxxxxxx',
/*		'twitter'            =>	'',
			'google'             =>	'',
			'pinterest'          =>	'',
			'feed'               =>	'',
			'feed_src'           =>	'',
*/		'gradient_color_1'   =>	'EEEEEE',
  		'gradient_color_2'   => 'FFFFFF',
			'shadow_color'   		 => 'CCCCCC'
		);

			$as = array(
			'toggle_cookies'     =>	'1',
/*		'toggle_custom_css'  =>	'',
			'custom_css'         =>	'',
*/    'toggle_social_js'   =>	'1',
  		'toggle_footer_link' =>	'1',
/*     button-1-visited'	 =>	'',
			'button-2-visited' 	 =>	'',
			'button-3-visited' 	 =>	'',
			'button-4-visited'   =>	'',
			'button-5-visited'   =>	'',
			'button-6-visited'   =>	'',
			'button-7-visited'   =>	'',
			'button-8-visited'   =>	'',
			'button-9-visited'   =>	'',
			'button-0-visited'   =>	''
*/		);
		update_option( 'mab_plugin_basic_settings', $bs );
		update_option( 'mab_plugin_advanced_settings', $as );
	 }
	}
	
	function mab_reset() {
			delete_option( 'mab_plugin_basic_settings' );
			delete_option( 'mab_plugin_advanced_settings' );
			delete_option( 'mab_plugin_info_settings' );
		$bs = array(
			'button_count'       =>	'5',
			'button_type'			   =>	'social',
//    'link_font_size'		 =>	'',
			'link_font_color'		 =>	'333333',
/*    'link_1'				     =>	'',
			'link_2'			       =>	'',
			'link_3'				     =>	'',
			'link_4'					   =>	'',
			'link_5'					   =>	'',
			'link_1_title'       =>	'',
			'link_2_title'       =>	'',
			'link_3_title'       =>	'',
			'link_4_title'       =>	'',
			'link_5_title'       =>	'',
			'facebook'           =>	'',
*/		'facebook_app_id'    =>	'xxxxxxxxxxxxxxxx',
/*		'twitter'            =>	'',
			'google'             =>	'',
			'pinterest'          =>	'',
			'feed'               =>	'',
			'feed_src'           =>	'',
*/		'gradient_color_1'   =>	'EEEEEE',
  		'gradient_color_2'   => 'FFFFFF',
			'shadow_color'   		 => 'CCCCCC'
		);

			$as = array(
			'toggle_cookies'     =>	'1',
/*		'toggle_custom_css'  =>	'',
			'custom_css'         =>	'',
*/    'toggle_social_js'   =>	'1',
  		'toggle_footer_link' =>	'1',
/*     button-1-visited'	 =>	'',
			'button-2-visited' 	 =>	'',
			'button-3-visited' 	 =>	'',
			'button-4-visited'   =>	'',
			'button-5-visited'   =>	'',
			'button-6-visited'   =>	'',
			'button-7-visited'   =>	'',
			'button-8-visited'   =>	'',
			'button-9-visited'   =>	'',
			'button-0-visited'   =>	''
*/		);
		update_option( 'mab_plugin_basic_settings', $bs );
		update_option( 'mab_plugin_advanced_settings', $as );
	}
	
	//PLUGIN MAIN FILES
	
	include_once 'settings/mab-plugin.php';	
	add_action ( 'wp_head', 'mab_display' );
	function mab_display()	{
		include_once 'mab-div.php';
	}
	if ( true == $GLOBALS['advanced_toggle_footer_link'] ) {
		add_action ( 'wp_footer', 'mab_footer_link');	
		function mab_footer_link() {
			include_once 'mab-f-div.php'; 
		}
	}
	//MISC FUNCTION GROUP
	
/**
*	RETURNS CURRENT URL
*
*/
	function mab_current_url() {	
 	$url = 'http';
 	if ( $_SERVER['HTTPS'] == 'on' ) { $url .= 's'; }
		$url .= '://';
			if ($_SERVER['SERVER_PORT'] != '80') {
				$url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
 			} else {
  				$url .= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
 			}
	return $url;
	}

/**
*	RETURNS FIRST IMAGE URL FROM POSTS
*
*/
	function mab_first_image() {
		global $post, $posts;
		$img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
		$img = $matches [1] [0];
		if ( empty ( $img ) ) {
			$img = plugins_url() . '/multipurpose-css3-animated-buttons/images/default.jpg';
		}
		return $img;
	}

/**
*	URL VALIDATION
*
*/
	function isValidURL( $url ) {
    return preg_match ('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url );
  }

/**
*	DIGIT VALIDATION
*
*/
  function isDigits( $element ) {
    return preg_match ('/[^0-9]/', $element );
  }

/**
*	COLOR CODE VALIDATION WITHOUT "#"
*
*/
  function isHex( $color ) {
    return !preg_match('/^[A-F0-9]{6}$/i', $color );
  }

/**
*	CSS CODE VALIDATION
*
*/
  function isValidCSS( $CsS ) {
    return preg_match ('/<\?php|<\?|</i', $CsS );
  }
  
?>