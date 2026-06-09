<?php


    const CollegeName = "Marwadi University";
    $Studentname = "Vaidehi Dudakiya";
    $Course = "BCA";
    $Semester = "5";
    $Enrollmentno = "92400527014";

    
    
    echo "<center><h1>".CollegeName ."</h1></center>";
    echo "<h2>Student Details : </h2>";
    echo "<h3>Student Name:     ". $Studentname . "</h3>";
    echo "<h3>Course:     ". $Course . "</h3>";
    echo "<h3>Semester:     ". $Semester . "</h3>";
    echo "<h3>Enrollment Number:     ". $Enrollmentno . "</h3>";

    $Subject1 = 80;
    $Subject2 = 70;
    $Subject3 = 60;
    $total = $Subject1 + $Subject2 + $Subject3;
    $percentage = $total / 3 ;


    echo "<br><h2>Result : </h2>";
    echo "<h3>Marks of Subject1: ". $Subject1 . "</h3>";
    echo "<h3>Marks of Subject2:     ". $Subject2 . "</h3>";
    echo "<h3>Marks of Subject3:     ". $Subject3 . "</h3>";
    echo "<h3>Total Marks = " .$total;
    echo "<h3>Percentage = ".$percentage . "%";

    
?>