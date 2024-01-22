<?php

$num=$_POST["n"];
$v=$_POST["a"];


for($i=1;$i<=$num;$i++)
    echo $v[$i].' ';


    echo '<br>';


for($i=1;$i<=$num;$i++)
    for($j=$i+1;$j<=$num;$j++)

    {
        if($v[$i]>$v[$j])
        {
            $aux=$v[$j];
            $v[$j]=$v[$i];
            $v[$i]=$aux;
        }
    }


    for($i=1;$i<=$num;$i++)
    echo $v[$i].' ';




?>