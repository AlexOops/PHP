<?php
function getNews()
{
    return getAssocResult("SELECT id, name, description FROM news");
}

function getOneNews($id)
{
    return getOneResult("SELECT id, name, description FROM news WHERE id = {$id}");
}
