<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Raffle System</title>
	<link type="text/css" rel="stylesheet" href="css/common.css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" type="text/css" />	
	<style type="text/css">
	    *{
	    	margin:0;
	    	padding:0;
	    	
	    	
	    }
	    body {
	    	text-align: center;
	    	background: #4f3722 url('images/darkcurtain.jpg') repeat-x;
	    	overflow-y : scroll;
	    }
	    img{
			border: none;
		}
	    .leftcurtain{
			width: 50%;
			height: 495px;
			top: 0px;
			left: 0px;
			position: absolute;
			z-index: 2;
		}
		 .rightcurtain{
			width: 51%;
			height: 495px;
			right: 0px;
			top: 0px;
			position: absolute;
			z-index: 3;
		}
		.rightcurtain img, .leftcurtain img{
			width: 100%;
			height: 100%;
		}
		.logo{
			margin: 0px auto;
			margin-top: 150px;
		}
		.rope{
			position: absolute;
			top: 40px;
			left: 68%;
			z-index: 4;
			display:none;
		}
		.rope span{
			color: #ffffff;
			font-size:20px;
			font-weight:bold;
		}
	</style>
</head>

<body>
	<div class="leftcurtain"><img src="images/frontcurtain.jpg"/></div>
	<div class="rightcurtain"><img src="images/frontcurtain.jpg"/></div>
	<div style="height:480px;"><div id="frame"><div id="scroll"><div id="container"></div></div></div></div>
	<a class="rope" href="#">
		<span></span><br>
		<img src="" width="350" height="300" style="border:5px solid #d22324" />
		<div style="background:url(images/ribbon.png) no-repeat; width:500px; height:300px;position:absolute; left: 10px; top:270px;"></div>
	</a>
	<div></div>
	
	
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<div style="clear:both; margin-top:50px;" ></div>
	<div class="container-fluid">
	  <div class="row-fluid">		
		<div class="span12">
			<div class="fileList_wrapper">
				
				<div class="fileList">
					<h1>Raffle</h1>
				    <img width="100px" height="100px" src="images/button.png" class="drag-image" id="draggable" onclick="imageClicked('1')" alt="gruop1" />
				    <img width="100px" height="100px" src="images/button.png" class="drag-image" id="draggable" onclick="imageClicked('2')" alt="gruop2" />
				    <img width="100px" height="100px" src="images/button.png" class="drag-image" id="draggable" onclick="imageClicked('3')" alt="gruop3" />
				    <img width="100px" height="100px" src="images/button.png" class="drag-image" id="draggable" onclick="imageClicked('4')" alt="gruop4" />
					<img width="100px" height="100px" src="images/button.png" class="drag-image" id="draggable" onclick="imageClicked('5')" alt="gruop5" />
					<img width="100px" height="100px" src="images/button.png" class="drag-image" id="draggable" onclick="imageClicked('6')" alt="gruop6" />
					<!-- <img width="120px" height="150px" src="images/top10.png" class="drag-image" id="draggable" onclick="imageClicked('top')" alt="gruop1" /> -->
					
				</div>
				<div class="showmodal">
					<div class="pricelisting">
						<h1>Please choose a raffle item to draw:</h1>    
						<div class="giftList"></div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
		
	<input type="hidden" id="action">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/common.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.shuffleLetters.js"></script>	
	<script src="jquery.easing.1.3.js" type="text/javascript"></script>  
</body>
</html>