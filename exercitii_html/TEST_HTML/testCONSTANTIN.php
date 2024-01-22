<?php

$n=$_POST["numar"];

echo '<body style="padding:40px; background-color: bisque;">';

echo '<center><h1 style="color:green;">Generarea primilor n termeni ai sirului lui Fibonacci</h1></center>';

echo '<center><img src="https://vasileteodor.ro/imgs/posts/55_m.jpg"></center>';

echo '<br><br>';

echo '<center><h2><u>Primii '.$n.' termeni ai sirului lui Fibonacci sunt:</u></h2></center>';

echo '<br>';

echo '<center>';
echo '<h3>';
$f1=0;
$f2=1;
$f3=0;
$ct=1;
echo $f2.' ';
do{
    $f3=$f1+$f2;
    $f1=$f2;
    $f2=$f3;
    $ct=$ct+1;

    
    echo $f3.' ';


}while($ct<$n);

echo '</h3>';
echo '</center>';

?>