<?php

//function getGallery(): array
//{
//    return array_splice(scandir('/img/gallery/small/'), 2);
//}

function upload()
{

    $path = "/img/gallery/big/" . $_FILES['myfile']['name'];

//    Проверка расширения файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {

        if (preg_match("/$item\$/i", $_FILES['myfile']['name'])) {
            $message = 'error_format';
            header("Location: /gallery/?status=" . $message);
            die();
        }
    }

    //Проверка на размер файла
    if ($_FILES["myfile"]["size"] > 1024 * 2 * 1024) {
        $message = 'error_size';
        header("Location: ?page=gallery&status=" . $message);
        die();
    }

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $path)) {

        $filename = mysqli_real_escape_string(getDb(), $_FILES['myfile']['tmp_name']);
        uploadImage($filename);

        $image = new SimpleImage();
        $image->load($path);
        $image->resizeToWidth(150);
        $image->save("/img/gallery/small/" . $_FILES['myfile']['name']);

        $message = "ok";

    } else {
        $message = "error";
    }

    header("Location: /gallery/?status=" . $message);
    die();
}