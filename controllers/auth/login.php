<?php

$title = "Login";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "Validator.php";
    require "Database.php";
    $config = require "config.php";
    $db = new Database($config);

    $errors = [];

    $query = "SELECT * FROM users WHERE email = :email";
    $params = [
        ":email" => $_POST["email"]
    ];

    $user = $db->execute($query, $params)->fetch();
    if (!$user && password_verify($_POST["password"], $user["password"])) {

    } else {
        $errors["email"] = "Invalid email or password";
    }

    dd($user);
}

require "views/auth/login.view.php";