<html>
<body>

<form method="post">
    Number 1: <input type="text" name="num1"><br><br>
    Number 2: <input type="text" name="num2"><br><br>

    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <br><br>
    <input type="submit" name="btn" value="Calculate">
</form>

</body>
</html>

<?php

function calculator($a, $b, $op)
{
    if($op=="+")
        return $a+$b;
    elseif($op=="-")
        return $a-$b;
    elseif($op=="*")
        return $a*$b;
    else
        return $a/$b;
}

if(isset($_POST['btn']))
{
    echo "Answer = ".calculator($_POST['num1'], $_POST['num2'], $_POST['op']);
}

?>

