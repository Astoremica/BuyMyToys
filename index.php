<?php
// ###使用する関数ファイルの呼び出しです。
require "./func/function.php";

// ①最初に、各変数ごとに使用するファイル名を格納します。
// タイトル格納
$title = 'Buy By Toys | Buy By Toys | おもちゃさがしをかんたんに フリマサイト';
// ヘッダー部分定義
$header = 'header';
// メイン部分定義
$main = 'lineup';
//  フッター部分定義
$footer = 'footer';
// この変数の中身を変更することでページ切り替えを行なっています。

//***こっから下のページ切り替えの処理って関数にしたらあかんかな？


// ②次に、ボタンクリック時のページ変更を設定します。

// ###欲しがってるボタンクリック時の動作
if (isset($_POST['want'])) {
  // タイトル変更
  $title = 'Buy By Toys | 欲しがってます';
  // メイン部分の書き換え
  $main = 'want';
}

// ###マイページボタンクリック時の動作
if (isset($_POST['mypage'])) {
  // タイトル変更
  $title = 'Buy By Toys | マイページ';
  // メイン部分の書き換え
  $main = 'mypage';
}

// ###商品詳細ボタンクリック時の動作
if (isset($_POST['product_detail'])) {
  // タイトル変更
  $title = 'Buy By Toys | 商品詳細';
  // メイン部分の書き換え
  $main = 'product_detail';
}

// ###マイページボタンクリック時の動作
if (isset($_POST['enter_newuser'])) {
  //  ヘッダー部分定義
  $header = 'sing_login_header';
  // タイトル格納
  $title = 'Buy By Toys | 会員情報入力';
  // メイン部分定義
  $main = 'enter_newuser';
  //  フッター部分定義
  $footer = 'sing_login_footer';
}

// ###会員登録ボタンクリック時の動作
if (isset($_POST['sing_in'])) {
  //  ヘッダー部分定義
  $header = 'sing_login_header';
  // タイトル格納
  $title = 'Buy By Toys | 新規会員登録';
  // メイン部分定義
  $main = 'create_account';
  //  フッター部分定義
  $footer = 'sing_login_footer';
}

// ###ログインボタンクリック時の動作
if (isset($_POST['log_in'])) {
  //  ヘッダー部分定義
  $header = 'sing_login_header';
  // タイトル格納
  $title = 'Buy By Toys | ログイン';
  // メイン部分定義
  $main = 'login';
  //  フッター部分定義
  $footer = 'sing_login_footer';
}

// ###出品ボタンクリック時
if (isset($_POST['exhibits_button'])) {
  // タイトル格納
  $title = 'Buy By Toys | 出品';
  // メイン部分定義
  $main = 'exhibits';
}

// ###出品画面から出品確認ボタンが押されたときの挙動
if (isset($_POST['exhibits_to_verification'])) {
  // タイトル格納
  $title = 'Buy My Toys | 出品の確認';
  // メイン部分定義
  $main = 'verification_exhibits';
}

// ###出品確認画面から出品確定ボタンが押されたときの挙動
if (isset($_POST['verification_to_done'])) {
  // タイトル格納
  $title = 'Buy My Toys | 出品完了';
  // メイン部分定義
  $main = 'done_exhibits';
}

// ③最後に格納されたファイル名のファイルを呼び出します。
// ###ヘッダー呼び出し
require_once "tpl/header/$header.php";
// データ呼び出し格納
$row = lineup();
// ###メイン部分呼び出し
require_once "tpl/main/$main.php";
// ###フッター呼び出し
require_once "tpl/footer/$footer.php";
