<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String operators</title>
</head>
<body>
    <h1>String Operators</h1>

    <?php
    //string operators
    //you can connect using a dot(.)
    $a = "Kim";
    $b = "Jackson";
    $c = 10;
    $d = 10;
    $e = 15;
    $f = 22;
    echo $a . " " . $b ."<br>"; 
     
    // arithmetic operators
    echo 200 * 5840 . "<br>";
    // + , - , / , //, ** , %, etc
    echo 10 % 3 . "<br>";
    // also follows the rule of BODMAS
    echo 10 + 5 * 100 ."<br>";
    echo (10+5) * 100 ."<br>";
    // comparison operators  ==, =, *=, if statements, !=, !==, <, >, <=, etc
    if ($c == $d) {
        echo "They are equal .<br>";
    }
    else{
        echo "They are not equal.<br>";
    }
  
    // you can use === operator to check if two variables are the same
    if ($c === $d) {
        echo "True.<br>";
    }
    else {
        echo "Not the same";
    }

    //logical operators - and((also &&)both conditions have to be true), or((also ||)one of the conditions have to be true)
    if ($c == $d or $e == $f) {
        echo "They true.<br>";
    }

  // incrementing and decrementing operators - ++, --, 
    echo ++$c ."<br>";
    echo --$d;

    echo(min(0, 150, 30, 20, -8, -200) . "<br>");
    echo(max(0, 150, 30, 20, -8, -200));

    ?>
</body>
</html>