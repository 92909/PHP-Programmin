<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
    <style>
        body{
            background-color: aquamarine;
        }
        .firstclass{
            text-align: center;
        }
    </style>
</head>
<body>

    <section class = "firstclass">
    <h1>Simple Calculator</h1>

        <form action="simplecalc.php" method="post">
            <label for="firstNumber">Enter first number</label>
            <input type="text" name = "firstNumber" placeholder="enter first number" required> <br><br>

            <label for="secondNumber">Enter secondnumber</label>
            <input type="text" name = "secondNumber" placeholder="enter second number" required> <br><br>

            
            
            <input type="text" name= "userChoice" placeholder="Choose the function" required>
           <!-- <select name="userSelection" id="userSelection">
                <option value="addition">addition</option>
                <option value="subtraction">subtraction</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
            </select> <br><br> -->
            
            <button class= "firstbutton">Calculate</button>
            
        </form>
    </section>
</body>
</html>