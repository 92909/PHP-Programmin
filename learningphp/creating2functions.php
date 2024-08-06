<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a function inside another function</title>
</head>
<body>
    <script>alert("Creating a function inside another function")</script>

    <?php
    echo "<h3> Creating a function inside another function </h3>";

    
    function myFirstFunction($name1)
    {
        
        echo $name1;

        function mySecondFunction()
        {
            $name2 = "Jackson";
            echo $name2 . "<br>";
        }
    }

    // you can use the keyword strpos("Hello world", "World") to find the position of the word world in the sentence hello world.
    myFirstFunction("Kim ");
    mySecondFunction();
    echo strtoupper("name1". "<br>");
    echo strtolower("NAME1". "<br>");
    echo $names = "Hello Kim Jackson". "<br>";
    echo str_replace("Jackson", "Kimani", $names . "<br>");
    $names1 = "Jackson Kimani";
    echo strrev($names1);
    
    ?>
    
</body>
</html>