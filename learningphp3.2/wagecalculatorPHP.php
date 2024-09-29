<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
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
        <legend>Results</legend>
        <img class="firstImage" src="python1.jpg" alt=""> <br> <br><br>
        <?php
        if (isset($_POST["submit"])) {
            $lunch = $_POST["lunch"];
            $hoursWorked = $_POST["hoursWorked"];
            $hourlyRate = $_POST["hourlyRate"];
            $lunchAllowance = $_POST["lunchAllowance"];
            

            if ($lunch === "YES") {
                $lunchAllowance = 200; 
        }
        else {
            $lunchAllowance = 0;
        }

        $basicSalary = $hoursWorked * $hourlyRate; 
        $grossSalary = $basicSalary + $lunchAllowance;
        $incomeTax = (30/100) * $grossSalary;
        $netPay = $grossSalary - $incomeTax;

        echo "Lunch Allowance: Kshs " . $lunchAllowance . "<br><br>"; 
        echo "Basic Salary : Kshs " . $basicSalary . "<br><br>";
        echo "Gross Salary: Kshs " . $grossSalary . "<br><br>"; 
        echo "Income Tax : Kshs " . $incomeTax . "<br><br>"; 
        echo "Net Pay : Kshs ". $netPay . "<br><br>"; 
    }

        ?>
    </fieldset>
</body>
</html>