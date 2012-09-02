<?php 
  if ( false == get_option( 'mab_plugin_advanced_settings' ) ) {
    add_option('mab_plugin_advanced_settings' );  
  }
  add_settings_section('advanced_settings_section', 'Advanced Settings', 'mab_advanced_settings_callback', 'mab_plugin_advanced_settings' );
  add_settings_field('toggle_cookies', 'Cookies', 'mab_toggle_cookies_callback', 'mab_plugin_advanced_settings', 'advanced_settings_section' );
  add_settings_field('toggle_custom_css', 'Custom CSS', 'mab_toggle_custom_css_callback', 'mab_plugin_advanced_settings', 'advanced_settings_section' );
  if ( true == $GLOBALS['advanced_toggle_custom_css'] ) {
    add_settings_field('custom_css', 'Enter your custom CSS', 'mab_custom_css_callback', 'mab_plugin_advanced_settings', 'advanced_settings_section' );
  }
  add_settings_field('toggle_social_js', 'Social Javascript', 'mab_toggle_social_js_callback', 'mab_plugin_advanced_settings', 'advanced_settings_section' );
  add_settings_field('toggle_delete_settings', 'Delete settings on deactivate', 'mab_toggle_delete_settings_callback', 'mab_plugin_advanced_settings', 'advanced_settings_section' );
  add_settings_field('toggle_footer_link', 'Footer Link', 'mab_toggle_footer_link_callback', 'mab_plugin_advanced_settings', 'advanced_settings_section' );
  register_setting(  'mab_plugin_advanced_settings', 'mab_plugin_advanced_settings', 'mab_plugin_validate_advanced_settings' );
  function mab_plugin_validate_advanced_settings($input) {
    //Validate checkboxes and text-area
  if ( isValidCSS( $input[ 'custom_css' ] ) ) {
      add_settings_error('unique_identifyer',esc_attr('settings_updated'),__('Invalid characters inside "Custom CSS"!'),'error');
      add_action('admin_notices', 'print_errors');
      $input = $GLOBALS['advanced_settings'];
      return $input;
      //RETURN VALIDATED SETTINGS
    } else {
      return $input;
      }
    }
?>