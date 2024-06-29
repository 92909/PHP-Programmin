<!DOCTYPE html>
<html lang="en">
<head>
    <title>First math test</title>
    <style>
        body{
            background-color: gold;
        }
        #firstheading{
            color: #222;
        }
        #firstButton{
            background-color: white;
            color: black;
        }

        #firstButton:hover{
            background-color: #222;
            color: gold;
        }

    </style>
</head>
<body>
    <h1 id = "firstheading"> FIRST MATH <?php echo "TEST"  ?></h1>

    <?php
    $firstNumber = 300;
    $secondNumber = 200;
    $totalNumber = $firstNumber + $secondNumber;
    echo "The sum of $firstNumber and $secondNumber is $totalNumber" ."<br>";

    // lets try sth
    $names = array("Kim","Jack","Douglas","MAryanne","Wycliff","Johnson","Michael",) ;
    foreach($names as $name) {echo $name."<br>"; }
    echo $names[1] ."<br>" ."<br>"; 
    ECHO "THIS IS THE SECON LIST" ."<br>";
    $secondNames = ["James","Hagai","Jonah","Judas","Henry","Wangombe"];
    echo "The second list of names are : ";
    foreach($secondNames as $secNames) {echo $secNames."<br>";}
    //you can also output a value as : 
    echo("My name is Kimutai <br>"."<br>");
    echo($names[1]."<br>");
    echo "<h1>Hello there! </h1>";
    echo "<h1>Hello $secondNames[1]</h1>";
    print "Kimutai";
    $name = 'Linus';
    echo '<h1>Hello $name</h1>';
    echo "<h1>Hello $name</h1>";
    echo "<br>";;
    echo "<br>";
    echo "<br>";

    ?>
    <a href="#"><button id = "firstButton" type="button" target="_blank">CALCULATE</button></a>
</body>
</html>