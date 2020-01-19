<?php
// ###関数ファイル紐付け
require_once "./func/function.php";
require_once '../config.php';

$header = 'nologin_header';
$title = 'Buy My Toys | Buy My Toys | おもちゃさがしをかんたんに フリマサイト';
$main = 'lineup';
$footer = 'nologin_footer';

// ###ヘッダー呼び出し
require_once "tpl/header/$header.php";
// データ呼び出し格納
$products = lineup();
// ###メイン部分呼び出し
require_once "tpl/main/$main.php";
// ###フッター呼び出し
require_once "tpl/footer/$footer.php";


// // 最初ヘッダー部分定義
// $header = 'header';
// // 最初タイトル格納
// $title = 'Buy By Toys | Buy By Toys | おもちゃさがしをかんたんに フリマサイト';
// // 最初メイン部分定義
// $main = 'lineup';
// //  最初フッター部分定義
// $footer = 'footer';

// // ###欲しがってるボタンクリック時
// // デモ時のみ
// if (isset($_POST['want'])) {
//   // タイトル格納
//   $title = 'Buy By Toys | 欲しがってます';
//   // メイン部分定義
//   $main = 'want';
// }

// // ###マイページボタンクリック時
// // デモ時のみ
// if (isset($_POST['mypage'])) {
//   // タイトル格納
//   $title = 'Buy By Toys | マイページ';
//   // メイン部分定義
//   $main = 'mypage';
// }

###商品詳細ボタンクリック時
// // デモ時のみ
// if ($_GET['product_id'] = 'product_detail') {
//     // タイトル格納
//     $title = 'Buy By Toys | 商品詳細';
//     // メイン部分定義
//     $main = 'product_detail';
// }

// // ###マイページボタンクリック時
// // デモ時のみ
// if (isset($_POST['enter_newuser'])) {
//   //  ヘッダー部分定義
//   $header = 'sing_login_header';
//   // タイトル格納
//   $title = 'Buy By Toys | 会員情報入力';
//   // メイン部分定義
//   $main = 'enter_newuser';
//   //  フッター部分定義
//   $footer = 'sing_login_footer';
// }


// ###会員登録ボタンクリック時
if (isset($_GET['singin'])) {
    header('Location:./regist.php');
    exit;
}
// // ###ログインボタンクリック時
// if (isset($_POST['log_in'])) {
//   //  ヘッダー部分定義
//   $header = 'sing_login_header';
//   // タイトル格納
//   $title = 'Buy By Toys | ログイン';
//   // メイン部分定義
//   $main = 'login';
//   //  フッター部分定義
//   $footer = 'sing_login_footer';
// }

// // ###出品ボタンクリック時
// if (isset($_POST['exhibits_button'])) {
//   // タイトル格納
//   $title = 'Buy By Toys | 出品';
//   // メイン部分定義
//   $main = 'exhibits';
// }

