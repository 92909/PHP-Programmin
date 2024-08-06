<?php
$cookie_name = "user";
$cookie_value = "Jackson";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = i day
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP cookies</h2>

    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie name is :   $cookie_name <br>";
        echo "Cookie value is : $cookie_value <br>";
    }
    else {
        echo "Cookie named $cookie_name is not set";
    }
    // the following code checks whether a cookie is enabled
    /* 
    <?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html> 
*/
    ?>
    
</body>
</html>