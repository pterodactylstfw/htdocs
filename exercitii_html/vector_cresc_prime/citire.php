<?php

$n=$_POST["num"];

echo '<form action="prime_vectcresc.php" method="POST">';
    echo '<table border="2">';
        for($i=1;$i<=$n;$i++)
            echo '<tr><td><input type="text" name="a['.$i.']"></td></tr>';

            echo '</table>';

            echo '<input type="hidden" name="num" value="'.$n.'">';

            echo '<input type="submit" value="Trimite">';

        echo '</form>';

?>