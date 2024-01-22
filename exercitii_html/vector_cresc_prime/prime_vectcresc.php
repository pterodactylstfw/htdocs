<?php

$v=$_POST["a"];
$n=$_POST["num"];

sort($v);

for($i=0;$i<$n;$i++)
{
    $ok=true;
    if($v[$i]!=2&&$v[$i]%2==0||$v[$i]<2) $ok=false;
    else
        for($d=3;$d*$d<=$v[$i];$d=$d+2)
        if($v[$i]%$d==0) $ok=false;

        
        if($ok==true)
            echo $v[$i].' '; 
}

echo '<br>';

rsort($v);

for($i=0;$i<$n;$i++)
{echo $v[$i].' '; 
}

echo '<br>';

krsort($v);
 print_r($v);

?>