<?php

$signupPwd = "KimJackson";
$options = [
    "cost" => 12
];

$hashedPwd = password_hash($signupPwd, PASSWORD_BCRYPT, $options);

$loginPwd = "KimJackson";

if (password_verify($loginPwd , $hashedPwd)) {
    echo "Log in successful";
}
else {
    echo "Please check your Log in details and Try Again!";
}