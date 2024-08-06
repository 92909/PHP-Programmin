<?php
// you start a session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    
    <?php
    $_SESSION["fullName"] = "Kim Jackson";
    $_SESSION["user_password"] = "Kimj.jackson";
    $_SESSION["user_email"] = "wycliffkimani9@gmail.com";

    echo "Session Variables are set";
    ?>

</body>
</html>