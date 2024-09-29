<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiles Calculator</title>
    <style>
        body {
            background-color: aliceblue;

        }
        .fieldSet1 {
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
    <fieldset class="fieldSet1">
    <img class="firstImage1" src="python3.jpg" alt=""> <br><br>
        <legend>Tiles calculator</legend>
        <form method="POST" action="threeintegersPHP.php">
            Enter the first number (x): 
            <input type="number" name="firstNumber" placeholder="Enter x" required> <br><br> 

            Enter the second number (y): 
            <input type="number" name="secondNumber" placeholder="Enter y" required> <br><br>

            Enter the third number (z): 
            <input type="number" name="thirdNumber" placeholder="Enter z" required> <br><br><br>

            <input type="submit" name="submit" value="Calculate"> <br><br>
        </form>
    </fieldset>
</body>
</html>