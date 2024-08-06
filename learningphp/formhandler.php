<?php

//var_dump(($_SERVER["REQUEST_METHOD"]));

If ($_SERVER["REQUEST_METHOD"]== "POST") {

    $firstname = htmlspecialchars($_POST["firstName"]);
    $secname = htmlspecialchars($_POST["secName"]);
    $userage = htmlspecialchars($_POST["userAge"]);

    echo "This is the data that the user submitted : ";
    echo "<br>";
    echo "First name : $firstname";
    echo "<br>";
    echo "Last name : $secname";
    echo "<br>";
    echo "User age : $userage";
  
}