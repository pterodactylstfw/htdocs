<?php
$n=$_POST["n1"];
$m=$_POST["m1"];
$v1=$_POST["a"];
$v2=$_POST["b"];

function nr_prim($x)
{
    $ok=true;
    if($x!=2&&$x%2==0||$x<2) $ok=false;
    else 
        for($d=3;$d*$d<=$x&&$ok==1;$d+=2)
            if($x%$d==0) $ok=false;
    return $ok;
}

$t=array_merge($v1,$v2);

sort($t);

for($i=0;$i<$n+$m;$i++)
{
    $x=$t[$i];
    
    if(nr_prim($x)==1) echo $x.' ';
}

?>