<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creating loops in php</title>
    <style>
        body{
            background-image: url("ja.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }        
    </style>
</head>
<body>
    <h3>creating loops in php</h3>

    <?php
    
    $number = 10;
    /*
    // for loop
    for ($number = 1; $number <= 5; $number++)
    {
        print_r("This is number $number");
        echo "<br>";
    }
    // if loop
    if ($number < 10)
    {
        echo "$number is less than 10";
        
    }
    
    else
    {
        echo "$number is more than 10";
    } */
    // while loop
    /*
    $numbers1 = 7;
    while ($numbers1 < 10 ) {
        print_r("The number is $numbers1");
        $numbers1++;
        print("<br>");
    }
    */
    // do loop
    /*
    $num1 = 5;
    do 
    {
        print_r("The number is : $num1");
        $num1++;
        echo "<br>";
    }
    while ($num1 <= 10);
    */
    //for each loop
    $names12 = ["James", "Jackson", "Peter", "Douglas"];
    foreach ($names12 as $nam)
    {
        echo "My name is $nam";
        echo "<br>";
    }
    // using the => key
    $fruits = ["Apples" => "Red", "Bananas" => "Yellow", "Carrots" => "Pink"];
    foreach ($fruits as $fruit => $color)
    {
        echo "The fruit is $fruit of color $color";
        echo "<br>";
    }
    ?>
</body>
</html>