<?php
session_start();
ini_set('display_errors','ON');
error_reporting('E_ALL');

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";


$url_array = explode('/', $_SERVER['REQUEST_URI']);

$action = $url_array[2]?? "";

if ($url_array[1] == '') {
    $page = "index";
} else {
    $page = $url_array[1];
}

$params = prepareVariables($page, $action, $messages);

$menu = [
    'menu' => $menu
];

echo render($page, $params, $menu);
