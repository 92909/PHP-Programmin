<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wage calculator</title>
    <style>
        body {
            background-color: aliceblue;

        }
        .firFieldset {
            background-color: antiquewhite;
            text-align: center;
            width: 450px;
            position: relative;
            margin-left: 350px;
        }
        .firstImage {
            width: 400px    ;
            height: cover;
        }
    </style>
</head>
<body>
    <fieldset class="firFieldset">
        <img class="firstImage" src="python1.jpg" alt="">
        <legend>Wage Calculator Form</legend>
        <form method="POST" action="wagecalculatorPHP.php">
            Enter the Number of Hours worked: 
            <input type="number" name="hoursWorked" required> <br> <br>

            Enter the Hourly Rate: 
            <input type="number" name="hourlyRate" required> <br> <br>

            Enter the Lunch Allowance: 
            <input type="number" name="lunchAllowance" required> <br> <br>

            Did you work for Lunch?
            <select name="lunch" id="lunch">
                <option value="YES">YES</option>
                <option value="NO">NO</option>
            </select>  <br> <br> <br> <br>

            <input type="submit" name="submit" value="Calculate">

        </form>
    </fieldset>
</body>
</html>