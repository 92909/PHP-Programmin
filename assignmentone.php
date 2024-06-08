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
