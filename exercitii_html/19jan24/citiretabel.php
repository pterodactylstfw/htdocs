<?php

$m= $_POST["n"];
echo '<body style="padding:200px;">';
echo '<center>';
echo '<form action="prelucrare.php" method="POST">';
echo '<table border="2">';
for($i=1;$i<=$m;$i++)
    echo '<tr><td><input type="text" name="a['.$i.']="></td></tr>';

    echo '</table>';

    echo '<input type="hidden" name="n" value="'.$m.'">';

    echo '<input type="submit" value="Trimite">';

    echo '</form>';
    echo '</center>';
    echo '</body>';

?>