<?php

function getBasket($id_session)
{
    return getAssocResult("SELECT basket.id as basket_id, catalog.id as catalog_id, product_name, img, description, price FROM basket, catalog WHERE basket.id_product = catalog.id AND id_session = '{$id_session}'");
}

function countBasketElem()
{
    $id_session = session_id();
    $result = getOneResult("SELECT count(id) as count FROM basket WHERE id_session = '{$id_session}'");
    return $result['count'];
}

function getBasketSum($id_session)
{
    $result2 = getOneResult("SELECT SUM(price) as sum FROM basket, catalog WHERE basket.id_product = catalog.id AND basket.id_session = '{$id_session}'");
    return $result2['sum'];
}

function addItemInBasket($id_session, $id, $action)
{
    if ($action == "buy") {
        executeSql("INSERT INTO basket(`id_product`, `id_session`) VALUES ('{$id}', '{$id_session}')");
        header("location: " . $_SERVER['HTTP_REFERER']);
        die();
    }
}

function delItemBasket($action)
{
    if ($action == "del") {
        $id = (int)$_GET['id'];
        executeSql("DELETE FROM basket WHERE id = '{$id}'");
        header("location: " . $_SERVER['HTTP_REFERER']);
        die();
    }
}

function order($id_session, $action)
{
    if ($action == "order") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        executeSql("INSERT INTO orders( `name`, `phone`, `id_session`) VALUES ('{$name}','{$phone}','{$id_session}')");
        header("location: /basket/?status=" . "send");
        die();
    }
}