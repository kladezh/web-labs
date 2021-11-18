<?php
require_once 'functions.php';

function check_login_input(): array
{
    $errors = [
        'email' => '',
        'password' => ''
    ];

    foreach ($errors as $input_name => &$error_type) {
        $error_type = check_valid_input($input_name, $_POST[$input_name]);
    }

    return $errors;
}

function login(): bool
{
    if ($user = user_already_exists($_POST['email'])) {
        if (password_verify($_POST['password'], $user['password'])) {
            session_start();
            $_SESSION['USER_ID'] = $user['id'];

            return true;
        }
    }

    return false;
}
