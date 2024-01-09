
<html>

<head>
    <title> Verificare </title>
</head>

<body style="background-color:antiquewhite; padding:350px; text-align:center; font-size:22px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">




<?PHP

$x=$_POST["numar"];
$op=$_POST["optiune"];


if($op==1)
{
    echo "<center><h1>Verificare numar prim</h1></center>";

    $ok=true;
    if($x%2==0 and $x!=2) $ok=false;
    else
        for($d=3;$d*$d<=$x;$d++)
            if($x%$d==0) $ok=false;

    if($ok==true) echo "Numarul $x este prim.";
    else echo "Numarul $x nu este prim."; 
}

if($op==2)
{
    echo "<center><h1>Verificare termen Fibonacci</h1></center>";

    $f1=0;
    $f2=1;
    $f3=0;
    do{
        $f3=$f1+$f2;
        $f1=$f2;
        $f2=$f3;

    }while($f3<$x);

    if($f3==$x) echo "<center>Numarul $x este Termen Fibonacci.</center>"; 
    else echo "<center>Numarul $x nu este Termen Fibonacci.<center>";
}

if($op==3)
{
    echo "<center><h1>Verificare numar palindrom</h1></center>";

    $aux=$x;
    $og=0;
    while($aux!=0)
    {
        $c=$aux%10;
        $og=$og*10+$c;
        $aux=floor($aux/10);
        unset($c);
    }

    echo $og;

    if($og==$x) echo "<center>Numarul $x este palindrom.<center>";
    else echo "<center>Numarul $x nu este palindrom.<center>";

}

?>

</body>


</html>