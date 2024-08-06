<?php

//var_dump(($_SERVER["REQUEST_METHOD"]));

If ($_SERVER["REQUEST_METHOD"]=="POST") {

    $firstNumber = htmlspecialchars($_POST["firstNumber"]);
    $secondNumber = htmlspecialchars($_POST["secondNumber"]);
    $userChoice = htmlspecialchars($_POST["userChoice"]);
    
   
      if ($userChoice == "addition") {
       $totalSum = $firstNumber + $secondNumber;
       echo $totalSum;
      }
      else if ($userChoice == "multiplication") {
        $totalSum = $firstNumber * $secondNumber;
       echo "Total : $totalSum";
      }
      else if ($userChoice == "subtraction") {
        $totalSum = $firstNumber - $secondNumber;
        echo "Total : $totalSum";
      }
      else if ($userChoice == "division") {
        $totalSum = $firstNumber / $secondNumber;
        echo "Total : $totalSum";
      }

      else {
        echo "Null";
      }
    
      if (empty($firstNumber)) {
        exit();
        /*header("Location: /simplecalculator.php");*/
      }
}