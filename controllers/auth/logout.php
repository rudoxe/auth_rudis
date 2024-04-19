<?php

auth();

session_unset();
session_destroy();

$params = session_get_cookie_params();

setcookie(session_name(), '', time() - 3600,
            $params['path'], $params['domain']);

header("Location: /login");
exit(); 