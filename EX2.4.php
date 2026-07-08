<?php

    $name ="Welcome to Marwadi University";
    echo"1. Length of the string:"." ".strlen($name);

    echo "<br>2. Position of the specific word:"." ".strpos($name,"to");

    echo "<br>3. Total Word Count:"." ".str_word_count($name);

    echo "<br>4. String Reverse :"." ".strrev($name);

    echo "<br>5. Lowercase:"." ".strtolower($name);

    echo "<br>6. Uppercase:"." ".strtoupper($name);
?>