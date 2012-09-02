<?php
	//SETTINGS MENU & PAGE
	add_action( 'admin_menu', 'mab_plugin_menu' );
	add_action( 'admin_init', 'mab_plugin_initialize_basic_settings' );
	add_action( 'admin_init', 'mab_plugin_initialize_advanced_settings' );
	add_action( 'admin_init', 'mab_plugin_initialize_info_settings' );
	function mab_plugin_menu() {
		add_plugins_page( 'Multipurpose CSS3 Animated Buttons',	
								'Multipurpose CSS3 Animated Buttons',			
								'administrator',					
								'mab_plugin_settings',																						
								'mab_plugin_render' );																							
	}
	function mab_plugin_render() {																												
		include_once 'mab-plugin-render.php';
	} 
	function mab_plugin_initialize_basic_settings() {																									
		include_once 'mab-plugin-basic-settings.php';
	}
	function mab_plugin_initialize_advanced_settings() {																								
  		include_once 'mab-plugin-advanced-settings.php';
	}
	function mab_plugin_initialize_info_settings() {																								
		if ( false == get_option( 'mab_plugin_info_settings' ) ) {
			add_option('mab_plugin_info_settings' );  
		}
		add_settings_section('info_settings_section', '', 'mab_info_settings_callback', 'mab_plugin_info_settings' );
		add_settings_field('reset_settings', 'Reset all settings to defaults', 'mab_reset_settings_callback', 'mab_plugin_info_settings', 'info_settings_section' );
		register_setting(  'mab_plugin_info_settings', 'mab_plugin_info_settings' );
	}
	//CALLBACKS
	function mab_basic_settings_callback() {																											
		echo '';
	}
	function mab_advanced_settings_callback() {																								
   	echo '';  
	}
		function mab_info_settings_callback() {																								
   	echo '';  
	}
	function mab_button_count_callback() {
		$items = array( '1', '2', '3', '4', '5' );
		echo '<select id="button_count" name="mab_plugin_basic_settings[button_count]"/>';
		foreach ( $items as $item ) {
			$selected = ( $GLOBALS['basic_button_count'] == $item ) ? 'selected="selected"' : '';
			echo "<option value='$item' $selected>$item</option>";
		} ?>		
		</select><small>&nbsp;How many buttons do you need?</small>
		<?php
	}
	function mab_button_type_callback() {																										
		$items = array( 'social', 'links' );
		echo '<select id="button_type" name="mab_plugin_basic_settings[button_type]"/>';
		foreach ( $items as $item ) {
			$selected = ( $GLOBALS['basic_button_type'] == $item ) ? 'selected="selected"' : '';
			echo "<option value='$item' $selected>$item</option>";
		} ?>
		</select><small>&nbsp;Select between social buttons or custom links.</small><?php
	}
	function mab_link_font_size_callback() {																												
		$items = array( '10', '11', '12', '13', '14', '15', '16' );
		echo '<select id="link_font_size" name="mab_plugin_basic_settings[link_font_size]"/>';
		foreach($items as $item) {
			$selected = ( $GLOBALS['basic_link_font_size'] == $item ) ? 'selected="selected"' : '';
			echo "<option value='$item' $selected>$item</option>";
		} ?>
		</select><small>&nbsp;Pixels.</small>
	<?php
	}
	function mab_link_font_color_callback() {																										
		$color = ''; 
		if ( isset ( $GLOBALS['basic_link_font_color'] ) ) { 
		$empty = $GLOBALS['basic_link_font_color']; 
		}
		echo '<input class="color" name="mab_plugin_basic_settings[link_font_color]" value="' . $GLOBALS['basic_link_font_color'] . '" />';  
	}
	function mab_link_1_callback() {																												  
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_1'] ) ) { 
			$empty = $GLOBALS['basic_link_1']; 
		}
		echo '<input type="text" id="link_1" name="mab_plugin_basic_settings[link_1]" value="' . $GLOBALS['basic_link_1'] . '" />';         
	}
	function mab_link_1_title_callback() {																											 
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_1_title'] ) ) { 
			$empty = $GLOBALS['basic_link_1_title']; 
		}
		echo '<input type="text" id="link_1_title" name="mab_plugin_basic_settings[link_1_title]" value="' . $GLOBALS['basic_link_1_title'] . '" />';          
	}
	function mab_link_2_callback() {																															
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_2'] ) ) { 
			$empty = $GLOBALS['basic_link_2']; 
		}
		echo '<input type="text" id="link_2" name="mab_plugin_basic_settings[link_2]" value="' . $GLOBALS['basic_link_2'] . '" />';          
	}
	function mab_link_2_title_callback() {																												
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_2_title'] ) ) { 
			$empty = $GLOBALS['basic_link_2_title']; 
		}
		echo '<input type="text" id="link_2_title" name="mab_plugin_basic_settings[link_2_title]" value="' . $GLOBALS['basic_link_3_title'] . '" />';            
	}
	function mab_link_3_callback() {																														
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_3'] ) ) { 
			$empty = $GLOBALS['basic_link_3']; 
		}
		echo '<input type="text" id="link_3" name="mab_plugin_basic_settings[link_3]" value="' . $GLOBALS['basic_link_3'] . '" />';     
	}
	function mab_link_3_title_callback() {																												 
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_3_title'] ) ) { 
			$empty = $GLOBALS['basic_link_3_title']; 
		}
		echo '<input type="text" id="link_3_title" name="mab_plugin_basic_settings[link_3_title]" value="' . $GLOBALS['basic_link_3_title'] . '" />';          
	}
	function mab_link_4_callback() {																												
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_4'] ) ) { 
			$empty = $GLOBALS['basic_link_4']; 
		}
		echo '<input type="text" id="link_4" name="mab_plugin_basic_settings[link_4]" value="' . $GLOBALS['basic_link_4'] . '" />';               
	}
	function mab_link_4_title_callback() {																												
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_4_title'] ) ) { 
			$empty = $GLOBALS['basic_link_4_title']; 
		}
		echo '<input type="text" id="link_4_title" name="mab_plugin_basic_settings[link_4_title]" value="' . $GLOBALS['basic_link_4_title'] . '" />';                
	}
	function mab_link_5_callback() {																														
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_5'] ) ) { 
			$empty = $GLOBALS['basic_link_5']; 
		}
		echo '<input type="text" id="link_5" name="mab_plugin_basic_settings[link_5]" value="' . $GLOBALS['basic_link_5'] . '" />';                 
	}
	function mab_link_5_title_callback() {																													
		$empty = ''; 
		if( isset( $GLOBALS['basic_link_5_title'] ) ) { 
			$empty = $GLOBALS['basic_link_5_title']; 
		}
		echo '<input type="text" id="link_5_title" name="mab_plugin_basic_settings[link_5_title]" value="' . $GLOBALS['basic_link_5_title'] . '" />';            
	}
	function mab_facebook_callback() {																								  
		$empty = ''; 
		if( isset( $GLOBALS['basic_facebook'] ) ) { 
			$empty = $GLOBALS['basic_facebook']; 
		}
		echo '<input type="text" id="basic_facebook" name="mab_plugin_basic_settings[facebook]" value="' . $GLOBALS['basic_facebook'] . '" />';               
	}
	function mab_facebook_app_id_callback() {																												 
		$empty = ''; 
		if( isset( $GLOBALS['basic_facebook_app_id'] ) ) { 
			$empty = $GLOBALS['basic_facebook_app_id']; 
		}
		echo '<input type="text" id="basic_facebook_app_id" name="mab_plugin_basic_settings[facebook_app_id]" value="' . $GLOBALS['basic_facebook_app_id'] . '" /><small>
		<br>Get your code from this <a href="http://developers.facebook.com/docs/reference/plugins/like/">link</a> and  copy marked code just like in the example below.<br>
		<div style="display:inline-block; border:1px solid #ccc; padding:5px; background-color:#eee;">
		&lt;script&gt;(function(d, s, id) {<br>
  			var js, fjs = d.getElementsByTagName(s)[0];<br>
  			if (d.getElementById(id)) return;<br>
  			js = d.createElement(s); js.id = id;<br>
  			js.src = &quot;//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=<mark>xxxxxxxxxxxxxxx</mark>&quot;;<br>
  			fjs.parentNode.insertBefore(js, fjs);<br>
		}(document, "script", "facebook-jssdk"));<br>
		&lt;/script&gt;
		</div></small>';               
	}
	function mab_twitter_callback() {																													
		$empty = ''; 
		if( isset( $GLOBALS['basic_twitter'] ) ) { 
			$empty = $GLOBALS['basic_twitter']; 
		}
		echo '<input type="text" id="basic_twitter" name="mab_plugin_basic_settings[twitter]" value="' . $GLOBALS['basic_twitter'] . '" />';               
	}
	function mab_google_callback() {																											
		$empty = ''; 
		if( isset( $GLOBALS['basic_google'] ) ) { 
			$empty = $GLOBALS['basic_google']; 
		}
		echo '<input type="text" id="basic_google" name="mab_plugin_basic_settings[google]" value="' . $GLOBALS['basic_google'] . '" />';           
	}
	function mab_pinterest_callback() {																									
		$empty = ''; 
		if( isset( $$GLOBALS['basic_pinterest'] ) ) { 
			$empty = $$GLOBALS['basic_pinterest']; 
		}
		echo '<input type="text" id="basic_pinterest" name="mab_plugin_basic_settings[pinterest]" value="' . $GLOBALS['basic_pinterest'] . '" />';                  
	}
	function mab_feed_callback() {																												
		$empty = ''; 
		if( isset( $GLOBALS['basic_feed'] ) ) { 
			$empty = $GLOBALS['basic_feed']; 
		}
		echo '<input type="text" id="basic_feed" name="mab_plugin_basic_settings[feed]" value="' . $GLOBALS['basic_feed'] . '" />';                  
	}
	function mab_feed_src_callback() {																													 
		$empty = ''; 
		if( isset( $GLOBALS['basic_feed_src'] ) ) { 
			$empty = $GLOBALS['basic_feed_src']; 
		}
		echo '<input type="text" id="basic_feed_src" name="mab_plugin_basic_settings[feed_src]" value="' . $GLOBALS['basic_feed_src'] . '" /><small><br>Login to your google feedburner account.<br>Select your feed then browse "Publicize>>FeedCount" and copy the code from src="..."</small>';         
	}
	function mab_gradient_color_1_callback() {																											 
		$empty = ''; 
		if( isset( $GLOBALS['basic_gradient_color_1'] ) ) { 
			$empty = $GLOBALS['basic_gradient_color_1']; 
		}
		echo '<input class="color" name="mab_plugin_basic_settings[gradient_color_1]" value="' . $GLOBALS['basic_gradient_color_1']. '" />';      
	}
	function mab_gradient_color_2_callback() {																											
		$empty = ''; 
		if( isset( $GLOBALS['basic_gradient_color_2'] ) ) { 
			$empty = $GLOBALS['basic_gradient_color_2']; 
		}		
		echo '<input class="color" name="mab_plugin_basic_settings[gradient_color_2]" value="' . $GLOBALS['basic_gradient_color_2'] . '" />';        
	}
	function mab_shadow_color_callback() {																											
		$empty = ''; 
		if( isset( $GLOBALS['basic_shadow_color'] ) ) { 
			$empty = $GLOBALS['basic_shadow_color']; 
		}		
		echo '<input class="color" name="mab_plugin_basic_settings[shadow_color]" value="' . $GLOBALS['basic_shadow_color'] . '" />';        
	}
	function mab_toggle_cookies_callback($args) {																									
		$html = '<input type="checkbox" id="toggle_cookies" name="mab_plugin_advanced_settings[toggle_cookies]" value="1" ' . checked(1, $GLOBALS['advanced_toggle_cookies'], false) . '/>';   
		$html .= '<label for="toggle_cookies"> '  . $args[0] . '</label><small>&nbsp;Cookies maximize your control over visited button styles.</small>';   
		echo $html;
	}
	function mab_toggle_custom_css_callback($args) {																								
		$html = '<input type="checkbox" id="toggle_custom_css" name="mab_plugin_advanced_settings[toggle_custom_css]" value="1" ' . checked(1, $GLOBALS['advanced_toggle_custom_css'], false) . '/>';   
		$html .= '<label for="toggle_custom_css"> '  . $args[0] . '</label><small>&nbsp;Use yor own styles.</small>';   
		echo $html;
	}
	function mab_custom_css_callback($args) {																										
		echo '<textarea id="custom_css" name="mab_plugin_advanced_settings[custom_css]" rows="7" cols="50">'. $GLOBALS['advanced_custom_css'] . '</textarea>';
	}
	function mab_toggle_social_js_callback($args) {																								 
		$html = '<input type="checkbox" id="show_footer" name="mab_plugin_advanced_settings[toggle_social_js]" value="1" ' . checked(1, $GLOBALS['advanced_toggle_social_js'], false) . '/>';   
		$html .= '<label for="toggle_footer_link"> '  . $args[0] . '</label><small>&nbsp;Disable social javascript if you want to use your own code.</small>';   
		echo $html;  
	}
	function mab_toggle_delete_settings_callback($args) {																								 
		$html = '<input type="checkbox" id="delete_settings" name="mab_plugin_advanced_settings[toggle_delete_settings]" value="1" ' . checked(1, $GLOBALS['advanced_toggle_delete_settings'], false) . '/>';   
		$html .= '<label for="toggle_delete_settings"> '  . $args[0] . '</label><small>&nbsp;Delete all settings.</small>';   
		echo $html;  
	}
	function mab_toggle_footer_link_callback($args) {																								 
		$html = '<input type="checkbox" id="show_footer" name="mab_plugin_advanced_settings[toggle_footer_link]" value="1" ' . checked(1, $GLOBALS['advanced_toggle_footer_link'], false) . '/>';   
		$html .= '<label for="toggle_footer_link"> '  . $args[0] . '</label><small>&nbsp;Support me by linking back from your theme footer.</small>';   
		echo $html;  
	}
	function mab_reset_settings_callback() {
	  if ( $_GET[ 'mab_reset' ] == 'true' ) { echo '<div class="updated settings-error" id="setting-error-settings_updated"><p><strong>Settings reset.</strong></p></div>'; }
		echo '<button class="button-primary" id="reset_button" type="submit" name="mab_plugin_info_settings[reset_settings]" value="Y"/>Reset Settings</button>';
	}
?>