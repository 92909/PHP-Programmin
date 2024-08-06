<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    <a href=""><button>Hit ME</button></a> <br>
    <?php
    // explode function is used to convert a string into an array
    $fullName = "Wycliff Kimani";
    $splitnames = explode(" ", $fullName);
    echo $fullName . "<br>";
    print_r($splitnames);
    echo "<br><br>";
    // to combine 2 strings..
    $firstname = "Kim ";
    $secondName = "Jackson";
    $fullNames = $firstname . $secondName;
    echo $fullNames;
    echo "<br>";
    // you can extract a part of s string by using substr function
    echo substr("Jackson", -5, 3);
    echo '<br>';
    echo "My name is Wycliff 'Kimani' Karanja . <br>";
    echo "The value of pi is : " . pi() . "<br>";
    // to return the absolute number = the positive value of a number
    echo (abs(-6.87) . "<br>");
    echo rand(0, 100) . "<br>";
    
    ?>
</body>
</html>