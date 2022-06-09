<?php

function getPictures()
{
    return getAssocResult("SELECT id, name, views FROM gallery ");
}

function getOnePicture($id)
{
    return getOneResult("SELECT id, name, views FROM gallery WHERE id = {$id}");
}

function isVisit($id)
{
    executeSql("UPDATE gallery SET views = views + 1 WHERE id = {$id}");
}

function uploadImage($filename)
{
    executeSql("INSERT INTO gallery(name) VALUES ('{$filename}'");
}