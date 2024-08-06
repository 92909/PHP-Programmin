<?php
session_start();

$_SESSION["username"] = "Jackson";
// unset($_SESSION["username"]);
// session_unset(); // this function deletes all the data stored in the function

session_destroy(); // this function stops the session from running again. Take note that this function/action will not 
// take effect in this file but on other pages for example, there will still be output if you run renamed.php but there will be 
// an eror if you run example.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SESSION["username"];
    ?>

</body>
</html>