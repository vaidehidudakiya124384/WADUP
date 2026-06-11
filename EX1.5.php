<?php

    echo("Using for loop");
    for($i=5;$i<=10;$i++)
    {
        echo("<br>"."$i"."<br>");
    }
    
    echo "<br>Using Foreach Loop<br>";
    
    $numbers = array(5, 6, 7, 8, 9, 10);
    
    foreach($numbers as $num)
    {
        echo $num . "<br>";
    }

?>