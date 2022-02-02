<?php
    $row = 3;
    $col1 = "Column1";
    $col2 = "Column2";

    while($row >= 0){
        echo "<table border=1>";
        echo "<tr>";
        echo "<td> $col1";
        echo "</td>";
        echo "<td> $col2";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> $col1";
        echo "</td>";
        echo "<td> $col2";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        $row -= 2;
    }
?>