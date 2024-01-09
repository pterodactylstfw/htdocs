<?PHP
$x=718;
$s=0;
while($x!=0)
{
    $c=$x%10;
    $s=$s+$c;
    $x=$x-$c;
    $x=$x/10;
    unset($c);
}

echo $s;

?>