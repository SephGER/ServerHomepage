<!--
mc/skin.php??layers=true&aa=true&a=0&w=330&wt=10&abg=330&abd=40&ajg=340&ajd=20&ratio=13&format=png&login=Hanfhasi&headOnly=false&displayHairs=true&randomness=938
mc/skin.php??layers=true&aa=true&a=0&w=330&wt=10&abg=330&abd=40&ajg=340&ajd=20&ratio=13&format=png&login=DevCat&headOnly=false&displayHairs=true&randomness=938

-->

<?
$maximg=42;
$img1=rand(1,$maximg);
$img2=$img1;
while($img2==$img1){
$img2=rand(1,$maximg);
}
$img3=$img2;
while($img3==$img2 or $img3==$img1){
$img3=rand(1,$maximg);
}
$img4=$img3;
while($img4==$img3 or $img4==$img2 or $img4==$img1){
$img4=rand(1,$maximg);
}

?>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Orbitron' rel='stylesheet' type='text/css'>
<h1>Wer sind wir?</h1>
<div class="row">
<div class="one-full column" style="border-radius:20px;background-color:white;opacity:0.75;" height="300px">
Im Dezember 2014 kam die Idee auf, zu zweit einen eigenen Minecraft-Server zu erstellen.<br>
Hierbei war schnell klar, dass DevCat die technische Seite &uuml;bernimmt, und die Kommunikation mit den Usern von Hanfhasi geleitet wird.<br>
Nachdem wir ein paar der wichtigsten Mods herausgesucht und uns auf eine Spielweise geeinigt hatten, fingen wir an die Welt "sephger.de" zu erschaffen.<br>
Nach den ersten Schritten trugen wir unseren Server auf einigen Minecraft-Server-Listen ein, um den Server &ouml;ffentlich zu machen.<br>
Nicht lange und die ersten User kamen zu uns. Zuerst nur aus dem englischsprachigen Raum, doch nach und nach aus aller Welt.<br>
Schnell wurde klar, dass nicht nur nette Leute online kamen, sondern auch einige schwarze Schafe. Aus diesem Grund entschieden wir uns, eine Whitelist einzuführen.<br>
Heute sind hauptsächlich deutsche User online, mit ein paar Ausnahmen aus Belgien oder den Niederlanden.<br>
</div>
</div>
<div class="row">
<div class="one-third column">
<span style="Font-Family:Orbitron;font-size:30px;">Headmaster of Technic</span>
<img style="transform: scaleX(-1);filter:FlipH;" src="images/devcat.png"><br>
<span style="border-radius:20px;background-color:white;padding:5px;">DevCat</span>
</div>
<div class="one-third column">
<img class="screen" src="/images/screenshots/<?=$img1?>.png" style="max-width:80%;">
<img class="screen" src="/images/screenshots/<?=$img2?>.png" style="max-width:80%;">
<img class="screen" src="/images/screenshots/<?=$img3?>.png" style="max-width:80%;">
<img class="screen" src="/images/screenshots/<?=$img4?>.png" style="max-width:80%;">
</div>
<div class="one-third column">
<span style="Font-Family:Indie Flower;font-size:30px;">Master of Communication</span>
<img src="images/hanfhasi.png"><br>
<span style="border-radius:20px;background-color:white;padding:5px;">Hanfhasi</span>
</div>