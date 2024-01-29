<?php
$n=$_POST["nn"];
$m=$_POST["nm"];

echo '<center><h1>Metoda interclasarii a doi vectori</h1></center>';
echo '<br><br><br>';
echo '<center><img src=https://i0.wp.com/javaconceptoftheday.com/wp-content/uploads/2019/08/MergeTwoSortedArrays.png?fit=606%2C368&ssl=1></center>';

echo '<form action="tablouri.php" method="post">';
echo '<b>Introduceti elementele tabloului a</b>';
echo '<br>';
echo '<table border="2">';

for($i=0;$i<$n;$i++)
echo '<tr><td><input type="text" size="10" name="a['.$i.']"></td></tr>';
echo '</table>';

echo '<input type="hidden" name="n1" value="'.$n.'">';


echo '<br><br><br>';
echo '<table border="2">';

for($i=0;$i<$m;$i++)
echo '<tr><td><input type="text" size="10" name="b['.$i.']"></td></tr>';
echo '<input type="hidden" name="m1" value="'.$m.'">';
echo '</table>';

echo '<input type=submit>'

?>