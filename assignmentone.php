<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
</head>
<body>
    <h1>Multipurpose Calculator</h1>
    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" step="any" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" step="any"><br><br>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponent">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm</option>
        </select><br><br>
        
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
        $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Division by zero';
                }
                break;
            case 'exponent':
                $result = pow($num1, $num2);
                break;
            case 'percentage':
                $result = ($num1 / 100) * $num2;
                break;
            case 'sqrt':
                if ($num1 >= 0) {
                    $result = sqrt($num1);
                } else {
                    $result = 'Error: Square root of negative number';
                }
                break;
            case 'log':
                if ($num1 > 0) {
                    $result = log($num1);
                } else {
                    $result = 'Error: Logarithm of non-positive number';
                }
                break;
            default:
                $result = 'Invalid Operation';
                break;
        }

        echo "<h2>Result: " . htmlspecialchars($result) . "</h2>";
    }
    ?>
</body>
</html>
