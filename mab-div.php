	<?php
	//STYLES
		if ( false == $GLOBALS['advanced_toggle_custom_css'] ) {
	?>
			<!-- MAB DEFAULT CSS -->
			s<link rel="stylesheet" type="text/css" href="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/css/mab-default-style.css'; ?>" media="screen" />
			<style type="text/css">
				.button-3d {
					background-image: url("<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/images/social-hi.png'; ?>");
					background-image: url("<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/images/social-hi.png'; ?>"),
					-webkit-gradient(linear, 0 0, 0 100%, from(#<?php echo $GLOBALS['basic_gradient_color_1']; ?>), to(#<?php echo $GLOBALS['basic_gradient_color_2']; ?>));
					background-image: url("<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/images/social-hi.png'; ?>"),
					-moz-linear-gradient(#<?php echo $GLOBALS['basic_gradient_color_1']; ?>, #<?php echo $GLOBALS['basic_gradient_color_2']; ?>);
					box-shadow: 2px 2px 2px #<?php echo $GLOBALS['basic_shadow_color']; ?>;
				}
			</style>
			<!-- END -->
	<?php
		} else {
	?>
			<!-- MAB CUSTOM CSS  -->
			<style type="text/css">
				<?php echo $GLOBALS['advanced_custom_css']; ?>
			</style>
			<!-- END -->
	<?php
		}
	?>		
	<!--  M A B  -->																																
		<div id="button-container">
			<?php
			// B U T T O N S
				if	( $GLOBALS['basic_button_type'] == 'social' ) {
					switch	( $GLOBALS['basic_button_count'] ) {
						case '1':							
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/facebook.php';
						break;
						case '2':																										
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/facebook.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/twitter.php';
						break;
						case '3':																												
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/facebook.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/twitter.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/google.php';		
						break;
						case '4':																												
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/facebook.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/twitter.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/google.php';		
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/pinterest.php';	
						break;
						case '5':
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/facebook.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/twitter.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/google.php';		
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/pinterest.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/social/feedburner.php';
						break; 
					}	
				}elseif	( $GLOBALS['basic_button_type'] == 'links' ) {
			?>
					<style type="text/css">
						.button-3d {
							background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#<?php echo $GLOBALS['basic_gradient_color_1']; ?>), to(#<?php echo $GLOBALS['basic_gradient_color_2']; ?>));
							background-image: -moz-linear-gradient(#<?php echo $GLOBALS['basic_gradient_color_1']; ?>, #<?php echo $GLOBALS['basic_gradient_color_2']; ?>);
						}
						#button-container input {
							font-size:<?php echo $GLOBALS['basic_link_font_size'];?>px;
							color:#<?php echo $GLOBALS['basic_link_font_color'];?>;
						}
					</style>
			<?php
					switch ( $GLOBALS['basic_button_count'] ) {
						case '1':																									
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-1.php';
						break;
						case '2':																													
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-1.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-2.php';
						break;
						case '3':																													
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-1.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-2.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-3.php';		
						break;
						case '4':																														
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-1.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-2.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-3.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-4.php';
						break; 
						case '5':
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-1.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-2.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-3.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-4.php';
							include_once plugin_dir_path( __FILE__ ) . '/buttons/links/link-5.php';			
						break;
					}		
				} 
				// S O C I A L   J A V A S C R I P T
				if (	$GLOBALS['basic_button_type'] == 'social' && true == $GLOBALS['advanced_toggle_social_js'] &&	 true == $GLOBALS['basic_facebook_app_id'] ) {																				
					include_once 'social-js.php';																				
				}
			?> 
		</div>
	<!--  END  -->	