<?php

declare(strict_types=1);


function is_input_empty(string $username, string $pwd)
{
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|string $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}


function is_password_wrong(string $pwd, string $hashedPassword)
{
    if (!password_verify($pwd, $hashedPassword)) {
        return true;
    } else {
        return false;
    }
}
