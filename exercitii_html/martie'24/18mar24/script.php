<?php

$server="localhost";
$user="root";
$pass="";
$db="elev10";
$conn=new mysqli($server, $user, $pass, $db);


echo '<body style="margin:20px; background-color="antiquewhite" text-align:center;">';

$nume=$_POST["np"];
$x1=$_POST["q1"];
$x2=$_POST["q2"];
$x3=$_POST["q3"];



$rez=$x1+$x2;

if(strcmp($x3,"b)")==0)
    {
        if($rez==2)
            echo 'Felicitari, ai raspuns corect!';
        $rez=$rez+1;
    }

else
    echo 'Mai incearca!';

    echo '<br>';
    if($conn) echo 'Conexiunea cu serverul reusita!';
    echo '<br>';

    $x="INSERT INTO test (nume, rezultat) VALUES ('$nume','$rez')";
    $x1=$conn -> query($x);
    if($r1) echo "Inserare reusita!".'<br>';

    $y="SELECT * FROM test";
    $x2=$conn -> query($y);
    while($inreg=$x2 -> fetch_array(MYSQLI_ASSOC))
        echo $inreg['nume'].' '.$inreg['rezultat'].'<br>';

    echo '</body>';


?>