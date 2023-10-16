<?php
// this is mandatory
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params(
    [
        'lifetime' => 1800, //30min
        'domain' => 'localhost',
        'path' => '/',
        'secure' => true,
        'httponly' => true
    ]
);
session_start();
//check if session exist inside website

if (!isset($_SESSION["last_regeneration"])) {
    regenrate_session_id();
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        regenrate_session_id();
    }
}

function regenrate_session_id()
{
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}
