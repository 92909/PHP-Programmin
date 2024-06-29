<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating arrays</title>
</head>
<body>
    <h1>Creating arrays</h1>

    <section></section>

    <?php
    $fruits = ["Banana", "Apples", "Grapes", "Pears"];
    echo $fruits[2]."<br>"."<br>"."<br>";

    $fruits[] = "Mangoes";
    /*echo $fruits[4]."<br>";
    foreach ($fruits as $fruit) {
        echo $fruit."<br>";
    };
    to remove anm item form the arrayP:*/
    unset($fruits[0]);
    foreach ($fruits as $fruitt) {
        echo $fruitt."<br>";
    };
    // you can also use array_splice(array_name, where do you start deleting, the number of elements to remove)
    array_splice($fruits, 0, 1);
    echo $fruits[0]."<br>";

    $tasks = [
        "Laundry" => "Daggy",
        "dishes" => "Kim",
        "Cooking" => "John",
        "Cleaning" => "Jeanelle",
        "Snacks" => "Nonnie",
    ];

    echo "<h1>Tasks</h1>";
    foreach ($tasks as $task) {
        echo "<br>";
        print_r($task. "<br>");
         
    }
    // you can use count inbuilt function to find out hoe many pieces of data are in an array
    echo count($tasks). "<br>";
    //you can also sort the list in an ascending order
    sort($tasks);
    print_r($tasks);
   
    //$tasks[] = "Ovacados"; can also be written as 
    array_push($tasks, "Vacuum cleaning");
    print_r($tasks);

    //you can also array_splice($variable) to add a variable
    array_splice($tasks, 0, 0, "dishwashing");
    print_r($tasks);
    ?>
</body>
</html>