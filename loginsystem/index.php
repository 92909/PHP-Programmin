<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
<section class="firstSection">
    <form action="includes/login.inc.php" method="post"> 

        <input class="firstInput" type="text" name="username" placeholder="username"> <br>
        <input class="secInput" type="password" name="password" placeholder="password"> <br><br>
        <button class="firstButton">LOGIN</button>

    </form>
</section>

<section class="secondSection">
    <form action="includes/signup.inc.php" method="post">
        <input class="secSectionInput1" type="text" name="username" placeholder="username"><br>
        <input class="secSectionInput2" type="password" name="user_password" placeholder="password"><br>
        <input class="secSectionInput3" type="text" name="email" placeholder="email"><br><br>
        <button class="secondButton">Sign Up</button>
    </form>
</section>

    <?php
    check_signup_errors();
    ?>
</body>
</html>