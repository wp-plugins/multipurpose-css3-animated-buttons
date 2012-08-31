	<form name="input-5" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>"> 	<!-- THIS FORMS USE COOKIES TO SET BUTTON ID'S. -->
		<ul>
			<li>
				<input name="3d-5" type="hidden" value="true">																			<!-- HIDDEN INPUT TO IDENTIFY THIS BUTTON. -->
				<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_feed'] ?>">									<!-- HIDDEN INPUT WHICH GETS TARGET URL FROM DATABASE. -->
				<?php if (	$GLOBALS['cookie3d5'] == "true"	)	{																						//IF COOKIE EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="visited-3d-5">							<!-- CHANGE ID TO STYLE AS VISITED. -->
				<?php }else{																															//IF COOKIE DOESN'T EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="unvisited-3d-5">						<!-- CHANGE ID TO STYLE AS UNVISITED. -->
				<?php } ?>
				<ul>
					<li>
						<a href="<?php echo $GLOBALS['basic_feed']; ?>"><img src="<?php echo $GLOBALS['basic_feed_src']; ?>" height="26" width="88" style="border:0" alt="" /></a>
					</li>
				</ul>
			</li>
		</ul>
	</form>