	<form name="input-3" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>"> 	<!-- THIS FORMS USE COOKIES TO SET BUTTON ID'S. -->
		<ul>
			<li>
				<input name="3d-3" type="hidden" value="true">																			<!-- HIDDEN INPUT TO IDENTIFY THIS BUTTON. -->
				<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_google']; ?>">									<!-- HIDDEN INPUT WHICH GETS TARGET URL FROM DATABASE. -->
				<?php if (	$GLOBALS['cookie3d3'] == "true"	)	{																						//IF COOKIE EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="visited-3d-3">							<!-- CHANGE ID TO STYLE AS VISITED. -->
				<?php }else{																															//IF COOKIE DOESN'T EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="unvisited-3d-3">						<!-- CHANGE ID TO STYLE AS UNVISITED. -->
				<?php } ?>
				<ul>
					<li>
						<div class="g-plusone" data-size="tall" data-href="<?php echo mab_current_url(); ?>"></div>
					</li>
				</ul>
			</li>
		</ul>
	</form>