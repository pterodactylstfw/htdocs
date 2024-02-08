<?php
$s=$_POST["nume"];
$r=$_POST["raspuns"];

$prenume=strtok($s, " ");
echo 'Buna, '.$prenume.'!';
echo '<br>';
if(strcasecmp($r, "monitor") == 0 || strcasecmp($r, "monitorul") == 0){
    echo 'Felicitari, ai raspuns corect!';
    echo '<br';
    echo '<img src="" height=300px width=300px alt="poza">';
}
else echo 'Mai incearca!';
?>