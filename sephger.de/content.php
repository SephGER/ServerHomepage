<?php


$content=$_GET["page"];
if($content==""){
$content="default";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Sephger.de - Minecraft Server</title> 	
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.5.0/css/font-awesome.css">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  
   	<style type="text/css">
		
		img.cat{
		transition: all 1s ease;
		}
		
		img.cat:hover{
		-webkit-transform:scale(1.3);
		transform:scale(1.3);
		}
		
		div.bg{
		position:fixed;
		background-image:url("images/dirt.jpg");
		opacity:0.5;
		width:100%;
		height:100%;
		}
		
		div.bgo{
		position:fixed;
		background-image:url("images/overlay_grass.png");
		opacity:0.5;
		width:100%;
		height:600px;
		background-repeat:repeat-x;
		}
		
	    img.screen{
		border-radius:20px;
		border-width:2px;
		border-style:solid;
		transition: all 1s ease;
		}
		
		img.screen:hover{
		-webkit-transform:scale(3);
		transform:scale(3);
		}
		
		.big,
		.fa-li{
		padding-top:30px;
		}

	</style>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/Grasblock.png">

</head>
<body>
<div class="bg">
</div>
<div class="bgo">
</div>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
	  <div class="row" align="center" >
	  <div class="one-full column" style="margin-top:2%;">
	  <?include($content.'.php');?>
	  <hr>
      <span style="margin-left:90%;"><a href="http://sephger.de"><i class="fa fa-2x fa-backward"></i>
	  </div>
	  </div>
  </div>
	 

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
