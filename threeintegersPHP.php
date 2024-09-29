<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        body {
            background-color: aliceblue;

        }
        .fieldSet3 {
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
    <fieldset class="fieldSet3">
        <legend>Results</legend>
        <img class="firstImage1" src="python3.jpg" alt=""> <br><br>
    

    <?php
    if (isset($_POST["submit"])) {
        $x = $_POST["firstNumber"];
        $y = $_POST["secondNumber"];
        $z = $_POST["thirdNumber"];
        $result = $x * $y * $z;
        echo "First Number : ". $x . "<br>";
        echo "Second Number : " . $y . "<br>";
        echo "Third Number : " . $z . "<br>";
        echo "The product of $x * $y * $z is : " . $result ."<br>";


    }
    ?>
    </fieldset>
</body>
</html>