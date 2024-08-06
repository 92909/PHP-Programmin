<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    
    <?php
    // you can create a constant thro'
    define("Greetings", "How are You!");
    echo Greetings. "<br>";
    // you can also use the const function
    const myCar = "Fortuner";
    echo myCar."<br>";
    $time = date("H");
    echo $time. "<br>";
    $fullDate = Date("Y-m-d H:i:s");
    echo $fullDate;
    // to have an if statement inside another if statement is called nested if
    $k = 15;
    if ($k > 10)
    {
        echo "Greater than 10";
        if ($k > 20)
        {
            echo "And also greater than 20";

        }
        else
        {
            echo "But not greater than 20";
        }
        echo "<br>";
    }
    $names = array("Jackson", "Maryanne", "Jackson", "Wycliff");
    array_push($names, "Jeanelle"); // you can use this t0 add a new value to an array
    foreach ($names as $name)
    {
        
        echo $name. "<br>";
    }
    // if you want to reset all the variable's value to one value
    foreach ($names as &$n){
        $n = "Kim";
    }
    unset($n);
    print_r ($names);
    // to remove an item from an array, use the array_splice
    $numbers = [100, 200, 400, 150, 700];
    array_splice($numbers, 1, 1);
    echo "<br>";
    print_r($numbers);
    echo "<br>";
    $newArray = array_diff($numbers, [700]); // this removes the value mentioned in the []
    print_r($newArray);
    echo "<br>";
    // array_pop() removes the last item
    // array_shift() removes the first item
    //array_diff($a, $b) compares the contents of arrays a and those of $b and outputs the value that is extra
    // unset($names[0]) removes the tagged item
    // array_splice($names, 1, 1) removes the mentioned item
    /* 
    sort($names) sorts the array in an ascending order
    rsort('') sorts in a descending order
    2 dimensional arrays is where there are arrays created inside another array

    */
    $list1 = array(
        array("Rice", 400, 200),
        array("Maize", 300, 50),
        array("Flour", 700, 1100)
    );
    echo $list1[0][0]. ": In stock- " . $list1[0][1]. "Sold - " . $list1[0][2] ."<br>";
    echo $_SERVER['PHP_SELF'];
    ?>
</body>
</html>