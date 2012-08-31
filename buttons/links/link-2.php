	<form name="input-7" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>">	
		<input name="3d-7" type='hidden' value="true">																						
		<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_link_2']; ?>">	
			<?php if ( true == $GLOBALS['cookie3d7'] ) { ?>
				<input type="submit" value="<?php echo $GLOBALS['basic_link_2_title']; ?>" name="submit"  class="button-3d" id="visited-3d-7">			
			<?php } else {	?>
				<input type="submit" value="<?php echo $GLOBALS['basic_link_2_title']; ?>" name="submit"  class="button-3d" id="unvisited-3d-7">		
			<?php } ?>
	</form>