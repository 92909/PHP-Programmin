<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTS</title>
    <style>
        .firstFieldset1 {
            background-image: url("python1.jpg");
            width: 400px;
            height: 300px;
            position:relative;
            margin-left: 350px;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            color: lightgreen;
        }
        .firstLegend {
            text-align: center;
        }
    </style>
</head>
<body>
<fieldset class="firstFieldset1">
        <legend class="firstLegend">RESULTS</legend>
        <h2 style="color:aqua">RESULTS</h2>

        <?php
        if (isset($_POST["submit"])) {
            $firstNumber = $_POST["firstNumber"];
            $secondNumber = $_POST["secondNumber"];
            $function = $_POST["function"];
            $result = "";


            if ($function == "+") {
                $result = $firstNumber + $secondNumber;
                echo "The sum is " . $result;
            }
            else if ($function == "-") {
                $result = $firstNumber - $secondNumber;
                echo "The difference is " . $result;
            }

            else if ($function == "*") {
                $result = $firstNumber * $secondNumber;
                echo "The product is " . $result;
            }
            else if ($function == "/") {
                $result = $firstNumber / $secondNumber;
                echo "The answer is " . $result;
            }
            else if ($function == "mod") {
                $result = $firstNumber % $secondNumber;
                echo "The modulus is " . $result;
            }
            else if ($function == "exp") {
                $result = pow($firstNumber , $secondNumber);
            echo "The exponential is : " . $result;
            }
            else if ($function == "%") {
                $result = ($firstNumber / 100) * $secondNumber;
                echo "The percentage is " . $result;
            }
            else if ($function == "log") {
                $result = log10($firstNumber);
                echo "The log is " . $result;
            }
            else if ($function == "sqrt") {
                $result = sqrt($firstNumber);
                echo "The square root is " . $result;
            }
            else {
                echo "Please re-enter the values";
            }

        }
        ?>

</fieldset>     
</body>
</html>