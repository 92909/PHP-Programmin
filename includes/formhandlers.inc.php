
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, user_password, email) VALUES (?, ?, ?);";

        $options = [
            "cost" => 12
        ];
        
        $hashedPwd = password_hash($user_password, PASSWORD_BCRYPT, $options);

        $stmt = $pdo->prepare($query);
        $stmt-> execute([$username, $hashedPwd, $email]);

        $pdo = null;
        $stmt = null;
        header("Location: index.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed " . $e->getMessage());
    }
}
else {
    header("Location: index.php");
}