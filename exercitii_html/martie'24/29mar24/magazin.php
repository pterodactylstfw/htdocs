<?php

$server="localhost";
$user="root";
$pass="";
$db="elev10";
$conn=new mysqli($server, $user, $pass, $db);

$rasp=$_POST["intrebare"];
$n=$_POST["nume"];
$a=$_POST["adresa"];

if($conn) echo 'Conexiunea cu serverul reusita!';
    echo '<br>';

echo 'Va multumim pentru comanda, '.$n.'! Produsul ' .$rasp.' este in drum spre dumneavoastra!';

echo '<br>';

$x="INSERT INTO Magazin (nume, rezultat, adresa) VALUES ('$n','$rasp', '$a')";
    $x1=$conn -> query($x);
    if($r1) echo "Inserare reusita!".'<br>';
?>