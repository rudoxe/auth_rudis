<?php

session_start();

$_SESSION["cart"] = "iPhone 29";

echo $_SESSION["cart"];