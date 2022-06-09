<?php
function renderMenu($menu): string
{
    $out = "<ul class='menu'>";
    foreach ($menu as $item) {
        $out .= "<li class='menu-item'><a href='{$item['url']}'>{$item['name']}</a>";
        if (isset($item['submenu'])) {
            $out .= getMenu($item['submenu']);
        }
        $out .= "</li>";
    }
    $out .= "</ul>";
    return $out;
}

