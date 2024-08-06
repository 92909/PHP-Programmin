<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
    

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = ? AND user_password= ?;";

        $stmt = $pdo->prepare($query);
        $stmt-> execute([$username, $user_password]);
        
        $pdo = null;
        $stmt = null;
        header("Location: ../signupforms/index.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed " . $e->getMessage());
    }
}
else {
    header("Location: ../signupforms/index.php");
}