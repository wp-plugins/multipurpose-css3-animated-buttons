	<form name="input-6" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>">
		<input name="3d-6" type='hidden' value="true">
		<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_link_1']; ?>">
			<?php if ( true == $GLOBALS['cookie3d6'] ) { ?>
				<input type="submit" value="<?php echo $GLOBALS['basic_link_1_title']; ?>" name="submit"  class="button-3d" id="visited-3d-6">
			<?php } else {	?>
				<input type="submit" value="<?php echo $GLOBALS['basic_link_1_title']; ?>" name="submit"  class="button-3d" id="unvisited-3d-6">
			<?php } ?>
	</form>