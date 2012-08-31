	<form name="input-2" method="get" action="<?php echo plugins_url() . '/multipurpose-css3-animated-buttons/cookies/visited.php'; ?>"> 	<!-- THIS FORMS USE COOKIES TO SET BUTTON ID'S. -->
		<ul>
			<li>
				<input name="3d-2" type="hidden" value="true">																			<!-- HIDDEN INPUT TO IDENTIFY THIS BUTTON. -->
				<input name="targetURL" type="hidden" value="<?php echo $GLOBALS['basic_twitter']; ?>">									<!-- HIDDEN INPUT WHICH GETS TARGET URL FROM DATABASE. -->
				<?php if (	$GLOBALS['cookie3d2'] == "true"	)	{																						//IF COOKIE EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="visited-3d-2">							<!-- CHANGE ID TO STYLE AS VISITED. -->
				<?php }else{																															//IF COOKIE DOESN'T EXIST... ?>
					<input type="submit" value="" name="submit" class="button-3d" id="unvisited-3d-2">						<!-- CHANGE ID TO STYLE AS UNVISITED. -->
				<?php } ?>
				<ul>
					<li>
						<a href="https://twitter.com/share" class="twitter-share-button" url="<?php echo mab_current_url(); ?>" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
					</li>
				</ul>
			</li>
		</ul>
	</form>