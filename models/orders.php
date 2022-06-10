<?php
function getOrders()
{
    return getAssocResult("SELECT * FROM orders ");
}

function getOneOrder()
{
    $id = (int)$_GET['id'];
    return getOneResult("SELECT * FROM orders WHERE id = {$id}");
}
