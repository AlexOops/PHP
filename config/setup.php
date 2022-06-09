<?php

//define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("BIG_IMG", ROOT . "/public/img/gallery/big");

$db = @mysqli_connect("localhost", "root", "", "boats") or die ("Could not connect: " . mysqli_connect_error());

$sql = "SELECT id, name FROM gallery";
$result = @mysqli_query($db, $sql) or die (mysqli_error($db));
var_dump($sql);
if ($result->num_rows == 0) {
    echo "Таблица пустая. Можно вносить данные!";
    $images = array_splice(scandir(BIG_IMG), 2);
   mysqli_query($db, "INSERT INTO gallery(name) VALUES ('" . implode("'),('", $images) ."')");
} else {
    echo "Таблица заполнена;";
}




