<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require "Validator.php";
  require "Database.php";
  $config = require "config.php";
  $db = new Database($config);

  $errors = [];

  if (!Validator::email($_POST["email"])) {
    $errors["email"] = "Invalid email";
  }

  if (!Validator::password($_POST["password"])) {
    $errors["password"] = "Password too short";
  }

  $query = "SELECT * FROM users WHERE email = :email";
  $params = [":email" => $_POST["email"]];
  $user = $db->execute($query, $params)->fetch();

  if ($user) {
    $errors["email"] = "email already in use";
  }

  if (empty($errors)) {

  $query = "INSERT INTO users (email, password)
  VALUES (:email, :password)";
  $sql_params = [
    ":email" => $_POST["email"],
    ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
  ];
  $db->execute($query, $sql_params);
  header("Location: /login");
  die();


  $_POST["email"];
  $_POST["password"];
  }
}


$title = "Register";
require "views/auth/register.view.php";