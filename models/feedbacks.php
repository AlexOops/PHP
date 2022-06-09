<?php
function getAllFeedbacks()
{
    $id_product = (int)$_GET['id'];
    return getAssocResult("SELECT * FROM feedbacks WHERE id_product = {$id_product} ORDER BY id DESC");
}

function addFeedback($name, $feedback, $id_product)
{
    $id = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $id_product)));
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $name)));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $feedback)));
    executeSql("INSERT INTO feedbacks(name, feedback, id_product) VALUE ('$name', '$feedback', '$id')");
    return mysqli_insert_id(getDB());
}

function delFeedback($id)
{
    executeSql("DELETE FROM feedbacks WHERE id = {$id}");
}

function doFeedBackAction(&$params, $action)
{
    $params['name'] = '';
    $params['feedback'] = '';
    $params['action'] = 'add';
    $params['id_feedback'] = '';
    $params['id_product'] = $_GET['id'];
    $params['button'] = 'submit';

    if (isset($action) && $action == 'add') {
        $name = $_POST['name'];
        $feedback = $_POST['feedback'];
        $id_product = (int)$_POST['id_product'];
        addFeedback($name, $feedback, $id_product);
        header("Location:  /oneproduct/?id={$id_product}&status=add"); // need to send it in controller ???
    }

    if (isset($action) && $action == 'delete') {
        $id = (int)$_GET['id_feedback'];
        $id_product = $_GET['id'];
        delFeedback($id);
        header("Location: /oneproduct/?id={$id_product}&status=del");
    }

    if (isset($action) && $action == 'edit') {
        $id = (int)$_GET['id_feedback'];
        $result = getAssocResult("SELECT * FROM feedbacks WHERE id = {$id}");
        $params['name'] = $result[0]['name'];;
        $params['feedback'] = $result[0]['feedback'];
        $params['button'] = 'change';
        $params['id_feedback'] = $id;
        $params['action'] = 'save';
    }

    if (isset($action) && $action == 'save') {
        $id_feedback = (int)$_POST['id_feedback'];
        $id_product = (int)$_POST['id_product'];
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
        $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['feedback'])));
        executeSql("UPDATE feedbacks SET name = '{$name}',feedback = '{$feedback}' WHERE id = {$id_feedback}");

        header("Location: /oneproduct/?id={$id_product}&status=edit");
    }
}

