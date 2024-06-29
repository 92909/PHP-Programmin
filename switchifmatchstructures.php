<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <h1>Switch statement</h1>
    <?php
    $a = 20;
    $b = 30;
    $c = "Kimani";
    
    $results = match ($a) {
        20 => "Variable is equal to 20",
        50 => "Variable is equal to 50",

        default => "None were a match",
    };
    echo $results

    //the difference between the if and switch is that in if, you can check of different conditions
    //while in switch, you can only check for one condition
 /*
    switch ($a) {
        case 20:
            echo "The first condition is true";
            break;
        case 30:
            echo "The second statement is wrong";
            break;
        default:
            echo "All the above conditions were wrong";
        } 
*/

    ?>
</body>
</html>