<?php

$i1=$_POST["q1"];
$i2=$_POST["q2"];
$i3=$_POST["q3"];


echo '<body style="padding:80px; text-align:center; background-color: antiquewhite;">';

echo '<h1>Chestionar - site tuning</h1>';



echo '<h2>Iți mulțumim că ai ales să participi la formularul nostru! Iată rezultatele tale:</h2>';

echo '<br>';

if($i1==1) echo '<h3>Am aflat că îți plac mașinile tunate. Ne bucurăm să auzim asta!</h3>';
if($i1==0) echo '<h3>Oh, ne pare rău că nu îți plac mașinile tunate. Poate îți vei schimba părerea!</h3>';


if($i2==4) echo '<h3>Mașina ta preferată este: Mazda RX7 </h3>';
if($i2==3) echo '<h3>Mașina ta preferată este: Toyota Supra</h3> ';
if($i2==2) echo '<h3>Mașina ta preferată este: Mitsubishi Lancer Evo X</h3>';
if($i2==1) echo '<h3>Mașina ta preferată este alta, care nu este în listă</h3>';

echo '<br>';

echo '<h3> Tu consideri că:</h3>';

if($i2==4) echo '<h3>merită să îți tunezi mașina.</h3>';
if($i2==3) echo '<h3> merită să îți tunezi mașina, dar nu o vei face.</h3>';
if($i2==2) echo '<h3> nu merită să îți tunezi mașina.</h3>';
if($i2==1) echo '<h3> nu ești foarte sigur în legătură cu părerea ta despre modificarea mașinilor.</h3>';

echo '<br>';
echo '<h3>Ne revedem în curând!</h3>';

echo '</body>';

?>