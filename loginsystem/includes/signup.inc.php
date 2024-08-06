<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERROR CHECKING / HANDLERS
        $errors = [];
        if (is_input_empty ($username, $user_password, $email)) {
            $errors["empry_inputs"] = "Fill in all the fields";
        }
        if (is_email_invalid ($email)) {
            $errors["invalid_email"] = "Enter a valid email";
        }
        if (is_username_taken ($pdo, $username)) {
            $errors["taken_username"] = "The username you chose is already taken";
        }
        if (is_email_registered ($pdo, $email)) {
            $errors["registered_email"] = "Use a registered email";
        }

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
        }


    } catch (PDOException $e) {
        die("Connection Failed : " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}