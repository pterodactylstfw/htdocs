<?php
$v=$_POST["a"];
$m=$_POST["n"];

echo '<body style="padding:200px;">';
echo '<center>';
for($i=1;$i<=$m;$i++)
    echo $v[$i].' ';

    echo '<br>';

    echo 'Sortarea vectorului';

    echo '<br>';

    for($i=1;$i<$n;$i++)
        for($j=$i+1;$j<=$n;$j++)
        if($v[$i]<$v[$j])
        {
            $aux=$v[$i];
            $v[$i]=$v[$j];
            $v[$j]=$aux;
        }

        for($i=1;$i<=$m;$i++)
    echo $v[$i].' ';

    echo '<br>';

    for($i=1;$i<=$m;$i++)
    if($v[$i]%2==1)
    {
        $c=$v[$i]%9;
        if($c==0) $v[$i]=9;
        else $v[$i]=$c;
    }

    echo 'Valorile schimbate dupa citire sunt: ';
    echo '<br>';

    for($i=1;$i<=$m;$i++)
    echo $v[$i].' ';


    

    echo '</center>';
    echo '</body>';

?>