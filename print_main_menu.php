<?php
$cssClassHeader = ['divClass' => 'clearfix', 'ulClass' => 'main-menu', 'fontSize' => 'font-size: 16px'];
$cssClassFooter = ['divClass' => 'clearfix', 'ulClass' => 'main-menu bottom', 'fontSize' => 'font-size: 12px'];
include '/home/CREAT0RS/smirnov.a/p3/htdocs/main_menu.php';

function arraySort($array, $key = 'sort', $sort)
{
    usort($array, function($a, $b) use ($key, $sort) {
        return $sort == SORT_DESC ? -($a[$key] <=> $b[$key]) : ($a[$key] <=> $b[$key]);
    });
    return $array;
}
function printMenu($array, $cssClass, $sort = SORT_ASC)
{
    $arraySort = arraySort($array, $key = 'sort', $sort);
    require '/home/CREAT0RS/smirnov.a/p3/htdocs/menu_template.php';
}
function zag($array)
{
    foreach ($array as $key => $value) {
        if ($_SERVER['REQUEST_URI'] == $value['path']) {
        echo $value['title'];
        }
    }
}
function cut(string $a, $lengh) : string
{
    return mb_strimwidth($a, 0, $lengh, "...");
}
