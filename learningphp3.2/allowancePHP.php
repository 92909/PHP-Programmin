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
        <img class="firstImage1" src="python1.jpg" alt=""> <br><br>

        <?php
        if (isset($_POST["submit"])) {
            $basicSalary = $_POST["basicSalary"];

            if ($basicSalary >= 20000) {
                $houseAllowance = (20/100) * $basicSalary;
                $transportAllowance = (15/100) * $basicSalary;
                $netSalary = $basicSalary + $transportAllowance + $houseAllowance;
            }
            else {
                $houseAllowance = (12/100) * $basicSalary;
                $transportAllowance = (10/100) * $basicSalary;
                $netSalary = $basicSalary + $transportAllowance + $houseAllowance;

            }
            echo "Gross Salary : " . $basicSalary . "<br>";
            echo "House Allowance : " . $houseAllowance . "<br>";
            echo "Transport Allowance : " . $transportAllowance ."<br>";
            echo "Net Salary " . $netSalary . "<br>";
            
        }
        ?>
    </fieldset>

    
</body>
</html>