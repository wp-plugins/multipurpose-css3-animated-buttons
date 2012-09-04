<?php
  if( false == get_option( 'mab_plugin_basic_settings' ) ) {																														   
    add_option( 'mab_plugin_basic_settings' );																																			
  }
    add_settings_section('basic_settings_section', 'Basic Settings', 'mab_basic_settings_callback', 'mab_plugin_basic_settings');						
    add_settings_field('button_count', 'Button Count', 'mab_button_count_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    add_settings_field('button_type', 'Button Type', 'mab_button_type_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
  if( $GLOBALS['basic_button_type'] == 'links' ){
      add_settings_field('link_font_size', 'Font size', 'mab_link_font_size_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_font_color', 'Font color', 'mab_link_font_color_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    if( $GLOBALS['basic_button_count'] == '1' ){
      add_settings_field('link_1', 'Link-1', 'mab_link_1_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_1_title', 'Link-1 title', 'mab_link_1_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }elseif( $GLOBALS['basic_button_count'] == '2' ){
      add_settings_field('link_1', 'Link-1', 'mab_link_1_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_1_title', 'Link-1 title', 'mab_link_1_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_2', 'Link-2', 'mab_link_2_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_2_title', 'Link-2 title', 'mab_link_2_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }elseif( $GLOBALS['basic_button_count'] == '3' ){
      add_settings_field('link_1', 'Link-1', 'mab_link_1_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_1_title', 'Link-1 title', 'mab_link_1_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_2', 'Link-2', 'mab_link_2_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_2_title', 'Link-2 title', 'mab_link_2_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_3', 'Link-3', 'mab_link_3_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_3_title', 'Link-3 title', 'mab_link_3_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }elseif( $GLOBALS['basic_button_count'] == '4' ){
      add_settings_field('link_1', 'Link-1', 'mab_link_1_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_1_title', 'Link-1 title', 'mab_link_1_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_2', 'Link-2', 'mab_link_2_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_2_title', 'Link-2 title', 'mab_link_2_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_3', 'Link-3', 'mab_link_3_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_3_title', 'Link-3 title', 'mab_link_3_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_4', 'Link-4', 'mab_link_4_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_4_title', 'Link-4 title', 'mab_link_4_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }elseif( $GLOBALS['basic_button_count'] == '5' ){
      add_settings_field('link_1', 'Link-1', 'mab_link_1_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_1_title', 'Link-1 title', 'mab_link_1_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_2', 'Link-2', 'mab_link_2_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_2_title', 'Link-2 title', 'mab_link_2_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_3', 'Link-3', 'mab_link_3_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_3_title', 'Link-3 title', 'mab_link_3_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_4', 'Link-4', 'mab_link_4_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('link_4_title', 'Link-4 title', 'mab_link_4_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_5', 'Link-5', 'mab_link_5_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('link_5_title', 'Link-5 title', 'mab_link_5_title_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }
  }else if( $GLOBALS['basic_button_type']  == 'social' ){
    if( $GLOBALS['basic_button_count'] == '1' ){
      add_settings_field('facebook', 'Facebook', 'mab_facebook_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('facebook_app_id', 'Facebook app id', 'mab_facebook_app_id_callback', 'mab_plugin_basic_settings', 'basic_settings_section');  
      }elseif( $GLOBALS['basic_button_count'] == '2' ){
      add_settings_field('facebook', 'Facebook', 'mab_facebook_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('facebook_app_id', 'Facebook app id', 'mab_facebook_app_id_callback', 'mab_plugin_basic_settings', 'basic_settings_section');  
      add_settings_field('twitter', 'Twitter', 'mab_twitter_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
    }elseif( $GLOBALS['basic_button_count'] == '3' ){
      add_settings_field('facebook', 'Facebook', 'mab_facebook_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('facebook_app_id', 'Facebook app id', 'mab_facebook_app_id_callback', 'mab_plugin_basic_settings', 'basic_settings_section');  
      add_settings_field('twitter', 'Twitter', 'mab_twitter_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('google', 'Google', 'mab_google_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }elseif( $GLOBALS['basic_button_count'] == '4' ){
      add_settings_field('facebook', 'Facebook', 'mab_facebook_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('facebook_app_id', 'Facebook app id', 'mab_facebook_app_id_callback', 'mab_plugin_basic_settings', 'basic_settings_section');  
      add_settings_field('twitter', 'Twitter', 'mab_twitter_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('google', 'Google', 'mab_google_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('pinterest', 'Pinterest', 'mab_pinterest_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
    }elseif( $GLOBALS['basic_button_count'] == '5' ){
      add_settings_field('facebook', 'Facebook', 'mab_facebook_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('facebook_app_id', 'Facebook app id', 'mab_facebook_app_id_callback', 'mab_plugin_basic_settings', 'basic_settings_section');      
      add_settings_field('twitter', 'Twitter', 'mab_twitter_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('google', 'Google', 'mab_google_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('pinterest', 'Pinterest', 'mab_pinterest_callback', 'mab_plugin_basic_settings', 'basic_settings_section'); 
      add_settings_field('feed', 'Feedburner', 'mab_feed_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
      add_settings_field('feed_src', 'Feedburner image code', 'mab_feed_src_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    }
  }
    add_settings_field('gradient_color_1', 'Gradient top color', 'mab_gradient_color_1_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    add_settings_field('gradient_color_2', 'Gradient bottom color', 'mab_gradient_color_2_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    add_settings_field('shadow_color', 'Button shadow color', 'mab_shadow_color_callback', 'mab_plugin_basic_settings', 'basic_settings_section');
    register_setting('mab_plugin_basic_settings', 'mab_plugin_basic_settings', 'mab_plugin_validate_basic_settings');
    //VALIDATION
    function mab_plugin_validate_basic_settings($input) {
/*FOR NOW IGNORING VALIDATION BECAUSE THERE ARE LOTS OF ERRORS WITH IT! 
      //Ignore rest of the validation on button count change
      if ( $input[ 'button_count' ] != $GLOBALS['button_count'] ) {
        $backup = $input[ 'button_count' ];
        $input = $GLOBALS['basic_settings'];
        $input[ 'button_count' ] = $backup;
        return $input;
      //Ignore rest of the validation on button type change
      } elseif ( $input[ 'button_type' ] == 'social' && $GLOBALS['basic_button_type'] == 'links' ) {
        $input = $GLOBALS['basic_settings'];
        $input[ 'button_type' ] = 'social';
        return $input;    
      } elseif ( $input[ 'button_type' ] == 'links' && $GLOBALS['basic_button_type'] == 'social' ) {
        $input = $GLOBALS['basic_settings'];
        $input[ 'button_type' ] = 'links';
        return $input;  
      //Validate Button Count
/*    if ( !isDigits( $input[ 'button_count' ] ) ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"Button Count" must be a digit!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
*//*    } elseif ( $input[ 'button_count' ] >= 6 || $input[ 'button_count' ] <= 0 ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid "Button Count"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Facebook
      } elseif ( empty( $input[ 'facebook' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Facebook" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'facebook' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Max character length for "Facebook" url is "80"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'facebook' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Facebook"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Facebook App ID
      } elseif ( empty( $input[ 'facebook_app_id' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Facebook App ID"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
/*    } elseif ( !isDigits( $input[ 'facebook_app_id' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"Facebook App ID" must be a digit!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
*//*    } elseif ( strlen( $input[ 'facebook_app_id' ] ) >= 16  || strlen( $input[ 'facebook_app_id' ] ) <= 0 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Digit length for "Facebook App ID" is "15"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Twitter
      } elseif ( empty( $input[ 'twitter' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Twitter" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'twitter' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Max character length for "Twitter" url is "80"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'twitter' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Twitter"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Google
      } elseif ( empty( $input[ 'google' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Google" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'google' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Max character length for "Google" url is "80"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'google' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Google"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Pinterest
      } elseif ( empty( $input[ 'pinterest' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Pinterest" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'pinterest' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Max character length for "Pinterest" url is "80"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'pinterest' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Pinterest"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Feedburner
      } elseif ( empty( $input[ 'feed' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Feedburner" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'feed' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Max character length for "Feedburner" url is "80"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'feed' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Feedburner"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Feedburner src
      } elseif ( empty( $input[ 'feed_src' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Feedburner src" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'feed_src' ] && $GLOBALS['basic_button_type'] == 'social' ) >= 156 ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Max character length for "Feedburner src" url is "155"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'feed_src' ] ) && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Feedburner src"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
/*Unknown Error! "isHex" Function not working!.Maybe Js-color altering it??...
      //Validate Colors
      } elseif ( isHex( $input[ 'gradient_1' ] ) ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid color code for "Gradient Top"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( isHex( $input[ 'gradient_2' ] ) ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid color code for "Gradient Bottom"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( isHex( $input[ 'shadow_color' ] ) ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid color code for "Button Shadow"! (' . $input[ 'shadow_color'] . ')' ),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( isHex( $input[ 'link_font_color' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid color code for "Link Font Color"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
*//*    //Validate Links
      } elseif ( empty( $input[ 'link_1' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Link-1" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'link_1' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Link-1"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( empty( $input[ 'link_2' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Link-2" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'link_2' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Link-2"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( empty( $input[ 'link_3' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Link-3" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'link_3' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Link-3"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( empty( $input[ 'link_4' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Link-4" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'link_4' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Link-4"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( empty( $input[ 'link_5' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('You must enter your "Link-5" url!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( !isValidURL( $input[ 'link_5' ] ) && $GLOBALS['basic_button_type'] == 'links' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid url format for "Link5"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      //Validate Link Titles
      } elseif ( strlen( $input[ 'link_1_title' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"80" characters are too long for "Link-1 title"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'link_2_title' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"80" characters are too long for "Link-2 title"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'link_3_title' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"80" characters are too long for "Link-3 title"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'link_4_title' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"80" characters are too long for "Link-4 title"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;
      } elseif ( strlen( $input[ 'link_5_title' ] ) >= 81 && $GLOBALS['basic_button_type'] == 'social' ) {
        add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('"80" characters are too long for "Link-5 title"!'),'error');
        add_action('admin_notices', 'print_errors');
        $input = $GLOBALS['basic_settings'];
        return $input;      
      } else {*/
        //RETURN VALIDATED SETTINGS
        return $input;
      //}
    }
?>