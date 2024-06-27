<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaring Variables</title>
    <style>
        #heading{
            color: chartreuse;
        }
        #button{
            color: brown;
        }
    </style>
</head>
<body>
    <h1 id="heading">DECLARING VARIABLES</h1>
    <button id="button">HIT ME</button>

    <?php
    $name = "Kim Jackson"; 
    $a = 15;
    $b = 30;
    $sum = $a + $b;
    echo $name;
    echo $sum;
    echo "The sum of the two numbers is $sum"
    ?>
</body>
</html>