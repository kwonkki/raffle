<html>
	<head>
		<title>PSP Raffle Draw</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<style>
			body{
				background:#1a1516 url(images/rock-and-roll-bg.jpg) bottom right no-repeat fixed;				
				min-height:100%;
			}			
		</style>
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/result.css" type="text/css" media="screen" />
				
	</head>
	<body>
		<div id="newsticker-demo"> 
		 <div class="title">TOP 10</div>
		<div class="newsticker-jcarousellite">
		<ul>
			<?php
				$handle = @fopen("topemp.txt", "r");
				if ($handle) {
					while (($buffer = fgets($handle, 4096)) !== false) {						
						?>
						<li>				
							<div class="info">
								<?=$buffer?>
							</div>
							<div class="clear"></div>
						</li>
						<?php
					}
					if (!feof($handle)) {
						echo "Error: unexpected fgets() fail\n";
					}
					fclose($handle);
				}
			?>            			
        </ul>
    </div>
	</div>
		
		<script src="js/jquery-latest.pack.js" type="text/javascript"></script>
		<script src="js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
		<script>
			var jlatest = jQuery.noConflict(true);
		</script>
		<script type="text/javascript">
		jlatest(function() {
			jlatest(".newsticker-jcarousellite").jCarouselLite({
				vertical: true,
				hoverPause:true,
				visible: 5,
				auto:500,
				speed:700
			});
		});
		</script>
	</body>
</html>