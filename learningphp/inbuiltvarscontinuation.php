<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inbuilt variables</title>

</head>
<body>
    <h1>Inbuilt variables</h1>
 
     

    <?php
        /* <form action= "<?php htmlspecialcharacters($_SERVER["PHP_SELF"]); method= "get" ?>">
            label
        </form>
        */
        $tasks = ["cleaning", "washing", "cooking"];
        $myName = "Kim Jackson";
        echo strlen($myName)."<br>";
        echo strpos($myName, "J")."<br>";
        //replacing
        echo str_replace("Jackson", "Kimani", $myName)."<br>";
        //changing everything to lowercase
        echo strtolower($myName)."<br>";
        //changing everything to lowercase
        echo strtoupper($myName). "<br>";
        //substring
        echo substr($myName, 0, 3). "<br>";
        // the abs() nattribute
        $number1 = -5.43242;
        echo abs($number1)."<br>";
        echo round($number1)."<br>";
        echo pow(10, 3)."<br>";
        echo sqrt(100)."<br>";
        echo rand(1, 10)."<br>";
        echo is_array($tasks)."<br>";
        array_push($tasks, "driving");
        print_r($tasks)."<br>";
        array_pop($tasks); // this removes the last component of the array
        print_r($tasks)."<br>";
        array_reverse($tasks);
        print_r($tasks)."<br>";
        echo "<br>";
        echo rand(1,10)."<br>";
    
        // outputting dates
        $date1 = "2020-12-1 13:43:33";
        echo Date("Y-m-d H:i:s")."<br>";
        echo time()."<br>";
        echo strtotime($date1);
        echo date("Y-m-d H:i:s")."<br>";

        echo pi()."<br>";
        
    ?>
</body>
</html>