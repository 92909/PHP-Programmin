<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call back functions</title>
</head>
<body>
    <h2>Call back functions</h2>

    <?php
    function fruit_names ($names) {
        return strlen($names);
    }

    $array1 = ["Apples", "Mangoes", "Straw berry", "Oranges"];
    $new_array = array_map("fruit_names", $array1);
    print_r($new_array);
    foreach ($new_array as $newArr) {
        echo "<br> $newArr";
    }
    ?>
</body>
</html>