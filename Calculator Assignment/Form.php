<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .firstFieldset {
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            background-color: #2c3e50;
            text-align: center
        }
        .firstLegend {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #ecf0f1;
        }
        .firstForm input, .firstForm select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 24px;
            margin-top: 8px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .firstForm input[type="submit"] {
            background-color: #1abc9c;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .firstForm input[type="submit"]:hover {
            background-color: #16a085;
        }

        .firstForm input[type="number"], 
        .firstForm select {
            background-color: #ecf0f1;
            color: #34495e;
        }

        .firstForm select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</head>
<body>
    <fieldset class="firstFieldset">
        <h2 style="color:aqua">Calculator Form</h2>
        <form class="firstForm" action="script.php" method="post">
            Enter the First Number : 
            <input type="number" name="firstNumber" placeholder="Enter the first Number">

            Enter the second Number : 
            <input type="number" name="secondNumber" placeholder="Enter the second Number">

            Choose an Operator: 
            <select name="function" id="function">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="mod">%</option>
                <option value="exp">^</option>
                <option value="sqrt">sqrt</option>
                <option value="log">log</option>
                <option value="%">percentage</option>
            </select>
            
            <input type="submit" name="submit" value="CALCULATE">
        </form>
    </fieldset>
</body>
</html>