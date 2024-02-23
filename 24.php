<?php

// 2

$let1 = "Hello";
$let2 = "World";

$lets = get_defined_vars();

foreach($lets as $name => $value) {
    echo "$name = $value<br>";
}


?>