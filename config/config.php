<?php
define('ROOT', dirname(__DIR__));
define('TEMPLATES_DIR', ROOT . '/templates/');
define('LAYOUTS_DIR', 'layouts/');

include ROOT . "/engine/menu.php";
include ROOT . "/engine/classSimpleImage.php";
include ROOT . "/engine/render.php";
include ROOT . "/engine/auth.php";
include ROOT . "/engine/controller.php";
include ROOT . "/engine/upload.php";

include ROOT . "/models/catalog.php";
include ROOT . "/models/files.php";
include ROOT . "/models/news.php";
include ROOT . "/models/gallery.php";
include ROOT . "/models/feedbacks.php";
include ROOT . "/models/basket.php";
include ROOT . "/models/orders.php";

//include ROOT . "/config/setup.php";

include ROOT . "/engine/db.php";

/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'boats');


$menu = [
    [
        'url' => '/',
        'name' => 'Главная'
    ],
    [
        'url' => '/catalog/',
        'name' => 'Каталог'
    ],
    [
        'url' => '/documents/',
        'name' => 'Документы'
    ],
    [
        'url' => '/gallery/',
        'name' => 'Галерея'
    ],
    [
        'url' => '/news/',
        'name' => 'Новости'
    ],
    [
        'url' => '/about/',
        'name' => 'О нас'
    ],
    [
        'url' => '/basket/',
        'name' => 'Корзина'
    ],
    [
        'url' => '/admin/',
        'name' => 'Админка'
    ]
];


$messages = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки',
    'error_size' => 'Файл весит больше 2Мб!',
    'error_format' => 'PHP файлы недоступны для загрузки!',
    'add' => 'Отзыв добавлен!',
    'del' => 'Отзыв удален!',
    'edit' => 'Отзыв изменен!',
//    'error_data' => 'Такого товара не существует'
    'send' => 'Заказ успешно оформлен',

];



