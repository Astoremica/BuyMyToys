<?php

require_once './func/function.php';
require_once '../config.php';

$header = 'login_header';
$title = 'Buy My Toys | おもちゃさがしをかんたんに フリマサイト';
$main = 'lineup';
$footer = 'top_footer';

require_once "tpl/header/$header.php";
// データ呼び出し格納
$products = lineup();
// ###メイン部分呼び出し
require_once "tpl/main/$main.php";
// ###フッター呼び出し
require_once "tpl/footer/$footer.php";
