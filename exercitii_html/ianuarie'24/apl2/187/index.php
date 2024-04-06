<?php

$val1=5000;
$val2=10000;
$val3=7000;

$s=$val1+$val2+$val3;
$p1=($val1*100)/$s;
$p2=($val2*100)/$s;
$p3=($val3*100)/$s;

$lg1=(int) $p1*15;
$lg2=(int) $p2*15;
$lg3=(int) $p3*15;

echo '<body style="padding:80px; margin:20px;" bgcolor="gray"></body>';
echo '<br><br><br>';
echo '<center><u><h1 style=color:white;>DIAGRAMA</h1></u></center>';
echo '<br><br><br>';

echo '<table><tr><td bgcolor="red" height=20px width='. $lg1 .'></td></tr></table>';  //folosim '.' pentru concatenarea sirului.
echo '<br>';
echo '<table><tr><td bgcolor="green" height=20px width='. $lg2 .'></td></tr></table>';  //folosim '.' pentru concatenarea sirului.
echo '<br>';
echo '<table><tr><td bgcolor="blue" height=20px width='. $lg3 .'></td></tr></table>';  //folosim '.' pentru concatenarea sirului.
echo '<br>';

echo '<img style="float:right;" src="computer.jpg">';
?>