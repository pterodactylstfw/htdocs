<?php

$v=$_POST["a"];
$s=0;
for($i=1;$i<=count($v);$i++)
    $s=$s+$v[$i];

    echo 'Suma este '. $s;

?>