<!--	S	O	C	I	A	L		J	A	V	A	S	C	R	I	P	T	-->
	<!-- FACEBOOK -->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $GLOBALS['basic_facebook_app_id']; ?>";
  			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	<!-- TWITTER -->
		<script>
			!function(d,s,id){
				var js,fjs=d.getElementsByTagName(s)[0];
				if(!d.getElementById(id)){
					js=d.createElement(s);
					js.id=id;
					js.src="https://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);
				}
			}(document,"script","twitter-wjs");
		</script>
	<!-- GOOGLE + -->
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<!-- PINTEREST -->
		<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<!--	E	N	D	-->