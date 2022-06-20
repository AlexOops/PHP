<?php
function prepareVariables($page, $action = "", $messages = [])
{
    $params['auth'] = is_auth();
    $params['login'] = get_user();
    switch ($page) {
        case 'index':
            $params['title'] = "Лодки напрокат";
            break;

        case 'login':
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            if (auth($login, $pass)) {
                if (isset($_POST['save'])) { // if checkbox checked then create uniqid
                    updateHash();
                }
                header("Location: " . $_SERVER['HTTP_REFERER']);
                die();
            } else {
                echo("Неверный логин пароль");
            }
            break;

        case 'logout':
            setcookie("hash", "", time() - 1, "/");
            session_regenerate_id();
            session_destroy();
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;

        case 'catalog':
            $params['title'] = "Каталог";
            $params['products'] = getCatalog();
            break;

        case 'oneproduct':
            $params['product'] = getOneProduct();

            $params['title'] = "Отзывы";
            $params['message'] = $messages[$_GET['status'] ?? ""] ?? "";
            doFeedBackAction($params, $action);
            $params['feedbacks'] = getAllFeedbacks();
            $id_session = session_id();
            $id = (int)$_GET['id'];
            addItemInBasket($id_session, $id, $action);
            addLike($action);
            break;

        case 'gallery':
            $params['title'] = "Галерея";
            $params['message'] = $messages[$_GET['status'] ?? ""] ?? "";
            $params['pictures'] = getPictures();

            if (!empty($_FILES)) {
                upload();
            }
            break;

        case 'oneitem':
            $id = (int)$_GET['id'];
            $params['title'] = "Картинка " . $id;
            isVisit($id);
            $params['picture'] = getOnePicture($id);
            break;

        case 'documents':
            $params['title'] = "Файлы";
            $params['files'] = getFiles();
            break;

        case 'news':
            $params['title'] = "Новости";
            $params['news'] = getNews();
            break;

        case 'onenews':
            $id = (int)$_GET['id'];
            $params['title'] = "Новость - " . $id;
            $params['news'] = getOneNews($id);
            break;

        case 'about':
            $params['title'] = "О нас";
            $params['phone'] = 79999999;
            break;

        case 'basket':
            $params['title'] = "Корзина";
            $id_session = session_id();
            $params['basket'] = getBasket($id_session);
            $params['sum'] = getBasketSum($id_session);
            delItemBasket($action);
            order($id_session, $action);
            $params['message'] = $messages[$_GET['status'] ?? ""] ?? "";
            break;

        case 'admin':
            $params['title'] = "Админка";
            $params['orders'] = getOrders();
            delOrder($action);
            break;

        case 'order':
            $params['title'] = "Заказ № ";
            $params['order'] = getOneOrder();
            $params['items'] = getDetailsOrder();
            $params['sum'] = getTotalSum();
            break;
    }
    return $params;
}