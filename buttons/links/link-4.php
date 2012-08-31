	<form name="input-9" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>">				<!-- THIS FORMS USE COOKIES TO SET BUTTON ID'S. -->
		<input name="3d-9" type='hidden' value="true">																							<!-- HIDDEN INPUT TO IDENTIFY THIS BUTTON. -->
		<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_link_4']; ?>">													<!-- HIDDEN INPUT WHICH GETS TARGET URL FROM DATABASE. -->
			<?php if ( true == $GLOBALS['cookie3d9'] ) { 																										//IF COOKIE EXIST... ?>
				<input type="submit" value="<?php echo $GLOBALS['basic_link_4_title']; ?>" name="submit"  class="button-3d" id="visited-3d-9">									<!-- CHANGE ID TO STYLE AS VISITED. -->
			<?php } else {																															//IF COOKIE DOESN'T EXIST... ?>
				<input type="submit" value="<?php echo $GLOBALS['basic_link_4_title']; ?>" name="submit"  class="button-3d" id="unvisited-3d-9">									<!-- CHANGE ID TO STYLE AS UNVISITED. -->
			<?php } ?>
	</form>