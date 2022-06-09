<?php


function getDb() // connecting to db
{
    static $db = null; // сохранили состояние в области функции через static
    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USER, PASS, DB) or die ("Could not connect: " . mysqli_connect_error());
    }
    return $db;
}

function getAssocResult($sql) // all
{
    $result = @mysqli_query(getDb(), $sql) or die (mysqli_error(getDb()));
    $array_result = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $array_result[] = $row;
    }
    return $array_result;
}

function getOneResult($sql) // one item
{
    $result = @mysqli_query(getDb(), $sql) or die (mysqli_error(getDb()));
    return mysqli_fetch_assoc($result);
}

function executeSql($sql) // update
{
    @mysqli_query(getDb(), $sql) or die (mysqli_error(getDb()));;
    return mysqli_affected_rows(getDb());
}