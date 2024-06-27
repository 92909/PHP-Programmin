<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types</title>
</head>
<body>
    <h1>DATA TYPES</h1>

    <?php
    // these are scalar data types
    $string = "Jackson";
    $integer = 21;
    $float = 3.142;
    $boolean = true;

    // array data types
    // you can do this in 2 ways (1. by using the keyword array())
    $names = array("Kim","Jackson","Karanja","Douglas") ;
    echo $names[3]. "<br>";

    // you can also use parenthesis []
    $namess = ["Kimani", "Jack", "Mutegi", "Esther"];
    echo $namess[2]. "<br>";
     
    echo $boolean."<br>";
    
    if ($boolean == "true") {
        echo "True . <br>";
        echo 2+2;
    }

    // object data types
    
    ?>
</body>
</html>