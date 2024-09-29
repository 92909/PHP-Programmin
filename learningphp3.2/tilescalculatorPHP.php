<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>
        body {
            background-color: aliceblue;

        }
        .fieldSet2 {
            background-color: antiquewhite;
            text-align: center;
            width: 450px;
            position: relative;
            margin-left: 350px;
        }
        .firstImage1 {
            width: 400px;
            height: cover;
            
        }
    </style>
</head>
<body>
    <fieldset class="fieldSet2">
        <legend>Results</legend>
        <img class="firstImage1" src="python3.jpg" alt=""> <br><br>
    

    <?php
    if (isset($_POST["submit"])) {
        $a = $_POST["length"];
        $b = $_POST["width"];
        $c = $_POST["hypotenuse"];

        $S = ($a + $b + $c) /2;
        
        $classroom_area = round(sqrt($S * ($S - $a) * ($S - $b) * ($S - $c)), 3);
        $tileArea = 0.36;
        $number_of_tiles = round($classroom_area / $tileArea, 3);

        echo "Length : " . $a . "M <br>";
        echo "Width : " . $b . "M <br>";
        echo "Hypotenuse : " . $c . "M <br>";
        echo "Class room area : " . $classroom_area . "M2 <br>";
        echo "Tiles area : " . $tileArea . "M2 <br>";
        echo "Number of Tiles : " . $number_of_tiles . "tiles <br>";

    }

    ?>
    </fieldset>
</body>
</html>