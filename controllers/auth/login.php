<?php




$title = "Login";

// 1. Visu nokopēt no register

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include DB, Validator
  require "Core/Validator.php";
  require "Core/Database.php";
  $config = require "config.php";
  $db = new Database($config);
  $errors = [];

  $query = "SELECT * FROM users 
            WHERE email = :email";
  $params = [
    ":email" => $_POST["email"]
  ];
  $user = $db->execute($query, $params)->fetch();
  if ($user && password_verify($_POST["password"], $user["PASSWORD"])) {
    $_SESSION["user"] = $user["email"];
    header("Location: /");
    exit();
  } else {
    $errors["email"] = "Invalid email or password";
  }

}
require "../views/auth/login.view.php";