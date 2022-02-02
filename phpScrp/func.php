<?php
    function rowOpenTag(){
        echo "<tr>";
    }
    function rowCloseTag(){
        echo "</tr>";
    }
    function colOpenTag(){
        echo "<td>";
    }
    function colCloseTag(){
        echo "</td>";
    }
    function tbOpenTage(){
        echo "<table border=2>";
    }
    function tbCloseTage(){
        echo "</table>";
    }
    function allFunc($no, $col1){
        tbOpenTage();
        rowOpenTag();
        colOpenTag();
        echo $no ." ". $col1;
        colCloseTag();
        rowCloseTag();
        tbCloseTage();

    }

    $row = 10;
    $col1 = "Column1";
    $no = 1;
    while($row >= 1){
        allFunc($no, $col1);
        $row--;
        $no++;
    }
?>