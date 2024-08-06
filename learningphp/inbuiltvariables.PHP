<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inbuilt variables</title>
</head>
<body>
    <h1>Inbuilt variables</h1>
    <?php
    echo $_SERVER["DOCUMENT_ROOT"];
    print "<br>";
    echo $_SERVER["PHP_SELF"];
    print "<br>";
    echo $_SERVER["SERVER_NAME"];
    print "<br>";
    $_SESSION["username"] = "Kim Jackson";
    echo $_SESSION["username"]."<br>";
    echo $_SERVER["REQUEST_METHOD"];
    $_POST;
    $_ENV;
    $_REQUEST;
    $_FILES;
    $_COOKIE;
    $_SESSION
    ?>
</body>
</html>