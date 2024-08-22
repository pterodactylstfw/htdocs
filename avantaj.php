<?php

$i1=$_POST["int1"];
$i2=$_POST["int2"];
$i3=$_POST["int3"];
$i4=$_POST["int4"];

$ct1=0;
$ct0=0;

if($i1==0) $ct0=$ct0+1;
    else $ct1=$ct1+1;

if($i2==0) $ct0=$ct0+1;
    else $ct1=$ct1+1;

if($i3==0) $ct0=$ct0+1;
    else $ct1=$ct1+1;

if($i4==0) $ct0=$ct0+1;
    else $ct1=$ct1+1;


    if($ct0>$ct1) echo 'Rețeaua cea mai potrivită pentru tine este Li-Fi!';

    else if($ct0<$ct1) echo 'Rețeaua cea mai potrivită pentru tine este Wi-Fi!';

    else echo 'Ambele rețele ți se potrivesc cerințelor tale.';

?>