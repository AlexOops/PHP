<?php
function getOrders()
{
    return getAssocResult("SELECT `id`, `name`, `phone` FROM orders ");
}

function getOneOrder()
{
    $id = (int)$_GET['id'];
    return getOneResult("SELECT * FROM orders WHERE id = {$id}");
}

function delOrder($action)
{
    if ($action == "del") {
        $id = (int)$_GET['id'];
        executeSql("DELETE FROM orders WHERE id = '{$id}'");
        header("location: " . $_SERVER['HTTP_REFERER']);
        die();
    }
}

function getDetailsOrder()
{
    return getAssocResult("SELECT basket.id_product, catalog.product_name, catalog.price, catalog.price, catalog.img FROM `basket`, `orders`, `catalog` WHERE basket.id_session = orders.id_session AND basket.id_product = catalog.id");
}

function getTotalSum()
{
    $result = getOneResult("SELECT SUM(catalog.price) as sum FROM `basket`, `orders`, `catalog` WHERE basket.id_session = orders.id_session AND basket.id_product = catalog.id");
    return $result['sum'];
}
