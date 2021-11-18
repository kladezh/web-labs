<?php
require_once 'functions.php';

function check_signup_input(): array
{
    $errors = [
        'email' => '',
        'name' => '',
        'birthday' => '',
        'rh_factor' => '',
        'password' => '',
        'password_ack' => ''
    ];

    foreach ($errors as $input_name => &$error_type) {
        $error_type = check_valid_input($input_name, $_POST[$input_name]);
    }

    return $errors;
}

function db_add_user(): bool
{
    $sql = "INSERT INTO `users` (email, name, birthday, rh_factor, password)\n"
        . "VALUES (:email, :name, :birthday, :rh_factor, :password)";

    $params = [
        ':email' => $_POST['email'],
        ':name' => $_POST['name'],
        ':birthday' => $_POST['birthday'],
        ':rh_factor' => $_POST['rh_factor'],
        ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];

    return db_change_values($sql, $params);
}
