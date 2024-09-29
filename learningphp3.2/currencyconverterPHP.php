<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <style>
        body {
            background-image: url("learningphp3.2/python1.jpg");
        }
        .firstFieldset {
            background-color: antiquewhite;
            width: 50%;
            height: 300px;
            text-align: center;
            left: 200px;
            position: relative;
            margin-left: 150px;
            top: 150px;
        }
    </style>
</head>
<body>
    <fieldset class="firstFieldset">
    <?php
    if (isset($_POST['submit'])) {
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $usd_to_kshs = 102;
        $kshs_to_usd = 1 / $usd_to_kshs;

    if ($currency === 'KSHS') {
        $new_amount = $amount * $kshs_to_usd;
        echo "<p>The new amount in USD is: " . number_format($new_amount, 2) . "</p>";

    }
    elseif ($currency === 'USD') {
        $new_amount = $amount * $usd_to_kshs; // USD to KSHS
        echo "<p>The new amount in KSHS is: " . number_format($new_amount, 2) . "</p>";
    }
    else {
            echo "<p>Invalid Currency</p>";
    }
        
    }

?>
<h1>Kim</h1>
</fieldset>
</body>
</html>