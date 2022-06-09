<?php
function getCatalog()
{
    return getAssocResult("SELECT * FROM catalog ");
}

function getOneProduct()
{
    $id = (int)$_GET['id'];
    return getOneResult("SELECT * FROM catalog WHERE id = {$id}");
}

function addLike($action)
{
    if (isset($action) && $action == "addlike") {
        $id = (int)$_GET['id'];
        executeSql("UPDATE catalog SET catalog.like = catalog.like + 1 WHERE id = {$id}");
        $result = getOneResult("SELECT `like` FROM `catalog` WHERE `id` = {$id}");
        $likes = $result['like'];
        $response['like'] = $likes;
        var_dump($response);
        return json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
