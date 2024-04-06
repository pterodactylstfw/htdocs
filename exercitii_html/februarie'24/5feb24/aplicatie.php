

<?php
$x1=$_POST["x"];
$x2=$_POST["y"];
$x3=$_POST["z"];

function isprime($x1,$d=3)
{
    if($x1!=2&&$x1%2==0||$x1<2) return 0;
    if($d*$d>$x1) return 1;
    if($x1%$d==0) return 0;
    return isprime($x1,$d+=2);
}

function palindrom($x, &$r)
{
    $cx=$x;
$og=0;
while($x>0)
{
    $c=$x%10;
    $og=$og*10+$c;
    $x=floor($x/10);
}

if($og==$cx) $r=1;
else $r=0;

}

function desc($x)
{
    $d=2;
    $p=0;
    while($x%$d==0)
    {
        $x=$x/$d;
        $p++;
    }

    if($p>0) echo $d.'^'.$p.' ';

    for($d=3;$d*$d<=$x&&$x>1;$d+=2)
    {
        $p=0;
        while($x%$d==0)
        {
            $p++;
            $x=$x/$d;
        }
        if($p>0) echo $d.'^'.$p.' ';
    }

    if($x>1) echo $x.'^'.$p.' ';

}

echo '<body style="font-family:Segoe UI; font-size:24px; padding:80px;">';

echo '<center><h2>Verificarea proprietatilor numerelor</h2></center>';

echo '<center>';
echo '<ul>';

echo '<li>';
if(isprime($x1)==1) echo 'Numarul '.$x1.' este prim';
else echo 'Numarul '.$x1.' nu este prim';
echo '</li>';

$rez;
palindrom($x2,$rez);
echo '<br><br>';

echo '<li>';
if($rez==1) echo 'Numarul ' .$x2. ' este palindrom';
else echo 'Numarul ' .$x2. ' nu este palindrom';
echo '</li>';

echo '<br><br>';
echo '<li>';
echo 'Numarul '.$x3.' se descompune astfel:';
echo '<br>';
desc($x3);
echo '</li>';

echo '</ul>';
echo '</center>';



echo '</body>';

?>