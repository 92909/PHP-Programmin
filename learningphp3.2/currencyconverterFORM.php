<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency converter</title>
    <style>
        .fieldset {
            background-color: antiquewhite;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="currencyconverterPHP.php">
        <fieldset class="fieldset">
            <legend>CURRENCY CONVERTER</legend> <br><br><br>
            Enter Amount: 
            <input type="number" name="amount" required> <br><br><br>

            Enter Currency : 
            <select name="currency" id="currency">
                <option value="KSHS">KSHS</option>
                <option value="USD">USD</option>
            </select> 
            <br><br>
            <input type="submit" name="submit" value="Calculate">


        </fieldset>

    </form>

    
</body>
</html>