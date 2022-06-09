<?php

function is_auth()
{
    if (isset($_COOKIE['hash'])) {
        $hash = $_COOKIE['hash'];
        $result = mysqli_query(getDb(), "SELECT * FROM users WHERE hash = '{$hash}'");

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $user = $row['login'];

            if (!empty($user)) {
                $_SESSION['login'] = $user;
                $_SESSION['id'] = $row['id'];
            }
        }
    }
    return isset($_SESSION['login']);
}

function get_user() // get username for variable
{
    return $_SESSION['login'];
}

function is_admin() // rights only for admin
{
    return get_user() == "admin";
}

function auth($login, $pass)
{
    $login = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($login)));
    $result = mysqli_query(getDb(), "SELECT * FROM users WHERE login = '{$login}'");
    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row['pass'])) {
        $_SESSION['login'] = $row['login'];
        $_SESSION['id'] = $row['id'];
        return true;
    }
    return false;
}

function updateHash()
{
    $hash = uniqid(rand(), true);
    $id = $_SESSION['id'];
    mysqli_query(getDb(), "UPDATE users SET hash = '{$hash}' WHERE id = {$id}");
    setcookie("hash", $hash, time() + 3600, "/");
}

