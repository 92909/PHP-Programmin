<!-- program to find the sales tax -->

<!DOCTYPE html>
<html>

<head>
    <title>SALES TAX</title>
</head>

<body>
    <legend>SALES TAX</legend>
    <form method="post">
        <fieldset>
            ENTER TOTAL MONTHLY SALES:
            <input type="number" name="sales" /><br><br>

            <input type="submit" name="submit" value="CALCULATE TAX" /><br><br>
        </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $sales = $_POST['sales'];
        $st = 0.05 * $sales;
        $ct = 0.025 * $sales;
        $tot = $st + $ct;

        echo "County Sales Tax = " . $ct;
        echo "<br>";
        echo "State Sales Tax = " . $st;
        echo "<br>";
        echo "Total Sales Tax = " . $tot;
        echo "<br>";
    }
    ?>
</body>

</html>