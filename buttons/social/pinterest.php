	<form name="input-4" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>"> 	<!-- THIS FORMS USE COOKIES TO SET BUTTON ID'S. -->
		<ul>
			<li>
				<input name="3d-4" type="hidden" value="true">																			<!-- HIDDEN INPUT TO IDENTIFY THIS BUTTON. -->
				<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_pinterest']; ?>">									<!-- HIDDEN INPUT WHICH GETS TARGET URL FROM DATABASE. -->
				<?php if (	$GLOBALS['cookie3d4'] == "true"	)	{																						//IF COOKIE EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="visited-3d-4">							<!-- CHANGE ID TO STYLE AS VISITED. -->
				<?php }else{																															//IF COOKIE DOESN'T EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="unvisited-3d-4">						<!-- CHANGE ID TO STYLE AS UNVISITED. -->
				<?php } ?>
				<ul>
					<li>
						<a href="http://pinterest.com/pin/create/button/?url=<?php echo mab_current_url(); ?>&description=<?php the_title(); ?>&media=<?php echo mab_first_image(); ?>" class="pin-it-button" count-layout="vertical"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
					</li>
				</ul>
			</li>
		</ul>
	</form>