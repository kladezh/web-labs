<?php
require_once 'db_logic.php';

function check_valid_input(string $input_name, string $value): string
{
    $regex_pass = '/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*_]{6,}/';
    $regex_name = '/^[a-zA-Zа-яА-Я]+$/u';

    if (empty($value)) {
        return 'empty';
    }

    switch ($input_name) {
        case 'email':
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                return 'invalid';
            }
            break;
        case 'name':
            if (!preg_match($regex_name, $value)) {
                return 'invalid';
            }
            break;
        case 'password':
            if (!preg_match($regex_pass, $value)) {
                return 'invalid';
            }
            break;
        case 'password_ack':
            if ($value !== $_POST['password']) {
                return 'invalid';
            }
            break;
        case 'birthday':
            // there is nothing to do...
            break;
    };

    return '';
}

function user_already_exists(string $email): array|bool
{
    $sql = "SELECT * FROM `users` WHERE email=:email";

    if ($user = db_fetch_row($sql, [':email' => $email])) {
        return $user;
    }

    return false;
}
