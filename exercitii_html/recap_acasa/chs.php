<?php

$numar=$_POST["num"];
$opt=$_POST["valtest"];

echo $opt; 
echo '<br>';

echo '<body style="padding:80px; margin:20px;">';
echo '<center>';

if($opt==1)
{
    $ok=true;
    if($numar%2==0&&$numar!=2|| $numar<2) $ok=false;
    else
        for($d=3;$d*$d<=$numar;$d++)
            if($numar%$d==0) $ok=false;


    if($ok==true) echo '<h3 style=font-family:Arial;>Numarul dat spre verificare, </h3>'.$numar.'<h3 style=font-family:Arial;>este prim. </h3>';
    else echo '<h3 style="font-family:Arial;">Numarul dat spre verificare, '.$numar.', NU este prim.</h3>';
}


if($opt==2)
{
    $f1=0;
    $f2=1;
    $f3=0;
    do
    {
        $f3=$f1+$f2;
        $f1=$f2;
        $f2=$f3;

    }while($f3<$numar);


    if($f3==$numar) echo '<h3 style=font-family:Arial;>Numarul dat spre verificare, '.$numar.', este termen Fibonacci. </h3>';
    else echo '<h3 style=font-family:Arial;>Numarul dat spre verificare, '.$numar.', nu este termen Fibonacci. </h3>';
}

if($opt==3)
{
    $aux=$numar;
    $og=0;
    
    while($aux!=0)
    {
        $c=$aux%10;
        $og=$og*10+$c;
        $aux=floor($aux/10);
    }

    if($og==$numar) echo '<h3 style=font-family:Arial;>Numarul dat spre verificare, '.$numar.', este numar palindrom. </h3>';
    else echo '<h3 style=font-family:Arial;>Numarul dat spre verificare, '.$numar.', nu este numar palindrom. </h3>';

}

if($opt==4)
{
    $cc=0;
    if($numar % 9 == 0) {
        $cc = 9;
    } else {
        $cc = $numar % 9;
    }

    echo '<h3 style=font-family:Arial;>Numarul dat spre verificare, '.$numar.', are cifra de control '.$cc.'</h3>';

}

if($opt==5)
{
   
    echo '<form action="prelucrare.php" method="POST">';
    echo '<table border="2">';
        for($i=1;$i<=$numar;$i++)
            echo '<tr><td><input type="text" name="a['.$i.']="></td></tr>';

            echo '</table>';

            echo '<input type="hidden" name="n" value="'.$numar.'">';

            echo '<input type="submit" value="Trimite">';

        echo '</form>';
        
}



echo '</center>';
echo '</body>';
?>