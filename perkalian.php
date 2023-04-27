<?php
//membuat perulangan untuk baris
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    //membuat perulangan untuk kolom
    for ($j = 1; $j <= 1; $j++) {
        echo "<td>" . $j . " x " . $i . " = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>