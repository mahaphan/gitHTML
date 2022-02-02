<?php
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $opr = $_POST["cal"];
    echo "<center>";
    echo "<h1>";
    if($opr == "Add"){
        echo "<br>$num1 + $num2 = ". ($num1 + $num2);
    }elseif($opr == "Sub"){
        echo "<br>$num1 - $num2 = ". ($num1 - $num2);
    }elseif($opr == "Mul"){
        echo "<br>$num1 * $num2 = ". ($num1 * $num2);
    }elseif($opr == "Div"){
        echo "<br>$num1 / $num2 = ". ($num1 / $num2);
    }elseif($opr == "Mod"){
        echo "<br>$num1 % $num2 = ". ($num1 % $num2);
    }else{
        echo "<br>$num1 ** $num2 = ". ($num1 ** $num2);
    }
    echo "</h1>";
    echo "</center>";
?>