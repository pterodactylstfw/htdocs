<?php

$a=array(17,34,10,55,8,100);

$salariu=array("Ionel"=>4500,"Mario"=>5500,"Irina"=>5000);

$ct=0;
for($i=0;$i<count($a);$i++)
{
    $f1=0;
    $f2=1;
    $f3=0;
    do
    {
        $f3=$f1+$f2;
        $f1=$f2;
        $f2=$f3;

    }while($f3<$a[$i]);

    if($f3==$a[$i]) $ct++;
    
}

echo 'Sunt '.$ct.' termeni Fibonacci <br>';

$smx=0;
foreach($salariu as $sal)
    if($sal>$smx) $smx=$sal;

    echo 'Salariul maxim este '.$smx.' lei';
    echo '<br>';
    foreach($salariu as $k=>$v)
    echo $k.' '.$v.'<br>';

?>