<!DOCTYPE html>
<?php

include('mc/view.php');
$players="$players/20";
$motd=$Info['HostName'];
?>
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
		-webkit-transform:scale(1.2);
		transform:scale(1.2);
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
    <div class="row">
	  <div class="two-half column" style="margin-top: 10%" align="center">
	  <IMG SRC="images/logo.png" width="100%" style="max-width:560px">
	  <p>Der freundliche Minecraft-Sever aus der Nachbarschaft.</p>
	  </div>
	  </div>
	  <div class="row" align="center">
      <div class="one-third column" style="margin-top: 5%">
		<a href="content.php?page=wir"><IMG class="cat" SRC="images/Grasblock.png"></a>
        <h5>&Uuml;ber uns</h5>
		<p>
		Wer wir &uuml;berhaupt sind.
		</p>
      </div>
	  <div class="one-third column" style="margin-top: 5%">
       <a href="content.php?page=rules"><IMG class="cat" SRC="images/Werkbank.png"></a>
        <h5>Der Server</h5>
		<p>Regeln & Co.</p>
      </div>
      <div class="one-third column" style="margin-top: 5%">
		<a href="content.php?page=register"><IMG class="cat" SRC="images/Diamanterz.png"></a>
        <h5>Anmeldung</h5>
		<p>
		Spiel mit!
		</p>
      </div>
	      </div>
	    <div class="row" align="center" color="white;">
		<div class="one-half column" height="50px" style="background-color:<?=$color?>;border-radius:25px;margin-top:5px;padding:10px;">
		Status: <?=$status?>
		</div>
	    <div class="one-half column" height="50px" style="background-color:<?=$color?>;border-radius:25px;margin-top:5px;padding:10px;">
		Spieler: <?=$players?>
		</div>
		</div>
	    <div class="row" align="center">
		<div class="two-half column" height="50px" style="background-color:<?=$color?>;border-radius:25px;margin-top:5px;padding:10px;">
		<?=$motd?>
		</div>
		</div>		
	    <div class="row" align="center">
	  <div class="one-full column" style="margin-top: 10%">
		<!--<h4 align="center"><i class="fa fa-4x fa-envelope"></i></h4>
        <h5>Kontakt</h5>-->
		<p>
		<table>
		<tr>
		<td><div align="center"><a href="mailto:admin@sephger.de"><IMG SRC="images/Grid_Papier.png"><br>Email</a></div></td>
		<!--<td><div align="center"><a href="https://twitter.com/sephger"><i class="fa fa-2x fa-twitter"></i><br>Twitter</a></div></td>
		<td><div align="center"><a href="https://facebook.com/sephger"><i class="fa fa-2x fa-facebook"></i><br>Facebook</a></div></td>-->
		</tr>
		</table>
		
		</p>
      </div>
    </div>
  </div>
  <footer style="width:100%;position:fixed;"align="center">
<p align="center"><i class="fa fa-copyright"></i> <a href="http://seitz.digital">Philip Seitz</a></p>
</footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
