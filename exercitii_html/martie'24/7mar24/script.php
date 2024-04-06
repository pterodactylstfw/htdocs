<?php
$server="localhost";
$username="root";
$password="";
$db="elev10";

$conn=new mysqli($server, $username, $pass, $db);
if($conn -> connect_error) die("eroare");
echo "Conexiune reusita!";


$x="INSERT INTO Persoana VALUES (3,'Irina',95)";
$q1= $conn -> query($x);
if($q1) echo "Inserare reusita!";

$z="SELECT nume, punctaj FROM Persoana";
$rez=$conn -> query ($z);
while($linie=$rez -> fetch_array(MYSQLI_ASSOC))
{
    echo $linie['nume'].' '.$linie['punctaj']."<br>";
}

?>