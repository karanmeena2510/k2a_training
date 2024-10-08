<?php
function printTable($number) {
    echo "Multiplication Table of $number:<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
}
$number = 5; 
printTable($number);
?>