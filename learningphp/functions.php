<?php
declare(strict_types= 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>

</head>
<body>
    <h1>Functions In PHP</h1>

    <?php
    $name1 = "Kim";
    function addition($a, $b, string $name) {
        $total = $a + $b;
        global $name1;
        echo $name1."<br>";
        return "The sum of " . $a . " and ". $b . "is $total"."<br>";
    }
    function Calculations($num1, $num2){
        $numTotal = $num1 + $num2;
        echo $numTotal;
    }
    echo addition($a = 10, $b = 40, $name= "Jackson");
    echo $name."<br>";
    echo Calculations(400, 500);

    //  there are functions where you do not know how many arguments you are gonna include
    // so this is what you do
    function Calcs(...$x){
        $j = 0;
        $m = 50;
        $n = 100;

        $lengt = count($x);
        for ($i = 0; $i < $lengt; $j++) {
            $j = $j + $x[$i];
        }
        $GLOBALS ["mn"] = $GLOBALS["m"] + $GLOBALS["n"];
        echo $j;
    }
    Calcs(120, 200, 50, 10, 50, 300, 500);
    echo $mn;
    ?>

    <script>
        Windows.Alert("Hello")
    </script>

</body>
</html>