<?php

echo "<h3>Numeric Array</h3>";

$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
print_r($days);

echo "<hr>";


echo "<h3>Associative Array</h3>";

$months = array(
    "January" => 30,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

print_r($months);

echo "<hr>";


echo "<h3>Multidimensional Array</h3>";

$laptop = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

print_r($laptop);

?>