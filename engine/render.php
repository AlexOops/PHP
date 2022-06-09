<?php
function render($page, $params = [], $menu = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'title' => $params['title'],
        'menu' => renderMenu($menu['menu']),
        'count' => countBasketElem(),
        'content' => renderTemplate($page, $params)
    ]);
}

function renderTemplate($page, $params = [])
{
    extract($params);
    ob_start();
    include TEMPLATES_DIR . $page . ".php";
    return ob_get_clean();
}