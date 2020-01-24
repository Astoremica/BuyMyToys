<?php
session_start();
// 関数ファイル
require_once "./func/function.php";
// configファイル
require_once '../config.php';

// ①最初に、各変数ごとに使用するファイル名を格納します。
$header = 'nologin_header';
$title = 'Buy My Toys | おもちゃさがしをかんたんに フリマサイト';
$main = 'lineup';
$footer = 'top_footer';

// ログアウト
if (isset($_POST['logout'])) {
  unset($_SESSION['user_id']);
  header('Location:./index.php');
  exit;
}

// ログイン状態か判定
if (isset($_SESSION['user_id'])) {
  $header = 'login_header';
}

// if (!isset($_SESSION['user_id'])) {
//   call_tamplate('nologin_header', 'Buy My Toys | おもちゃさがしをかんたんに フリマサイト', 'lineup', 'top_footer');
//   exit;
// }

// この変数の中身を変更することでページ切り替えを行なっています。

//***こっから下のページ切り替えの処理って関数にしたらあかんかな？


// ②次に、ボタンクリック時のページ変更を設定します。

// ###欲しがってるボタンクリック時の動作
// if (isset($_POST['want'])) {
//   // タイトル変更
//   $title = 'Buy By Toys | 欲しがってます';
//   // メイン部分の書き換え
//   $main = 'want';
// }

// ###マイページボタンクリック時の動作
// if (isset($_POST['mypage'])) {
//   // タイトル変更
//   $title = 'Buy By Toys | マイページ';
//   // メイン部分の書き換え
//   $main = 'mypage';
// }

// ###商品詳細ボタンクリック時の動作
if (isset($_GET['product_detail'])) {
  $header = 'login_header';
  // タイトル変更
  $title = 'Buy By Toys | 商品詳細';
  // メイン部分の書き換え
  $main = 'product_detail';
}

// ###マイページボタンクリック時の動作
if (isset($_POST['enter_newuser'])) {
  //  ヘッダー部分定義
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy By Toys | 会員情報入力';
  // メイン部分定義
  $main = 'enter_newuser';
  //  フッター部分定義
  $footer = 'sing_login_footer';
}

// // ###会員登録ボタンクリック時の動作
// if (isset($_POST['sing_in'])) {
//   //  ヘッダー部分定義
//   $header = 'sing_login_header';
//   // タイトル格納
//   $title = 'Buy By Toys | 新規会員登録';
//   // メイン部分定義
//   $main = 'create_account';
//   //  フッター部分定義
//   $footer = 'sing_login_footer';
// }

// // ###ログインボタンクリック時の動作
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

// ################### 商品出品系 ##########################

// ###出品ボタンクリック時
if (isset($_GET['exhibits_button'])) {

  $header = 'login_header';
  // タイトル格納
  $title = 'Buy By Toys | 出品';
  // メイン部分定義
  $main = 'exhibits';
}


// ###出品画面から出品確認ボタンが押されたときの挙動
if (isset($_POST['exhibits_to_verification'])) {
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy My Toys | 出品の確認';
  // メイン部分定義
  $main = 'verification_exhibits';
}

// ###出品確認画面から出品確定ボタンが押されたときの挙動
if (isset($_POST['verification_to_done'])) {
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy My Toys | 出品完了';
  // メイン部分定義
  $main = 'done_exhibits';
}

// ##################### 商品購入系 ########################

// ###商品詳細画面から商品購入確認ボタンが押されたときの挙動
if (isset($_POST['product_to_verification'])) {
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy My Toys | 購入の確認';
  // メイン部分定義
  $main = 'verification_buying';
}

// ###商品購入確認画面から商品購入確定ボタンが押されたときの挙動
if (isset($_POST['verification_to_done_buying'])) {
  $header = 'login_header';
  //タイトル格納
  $title = 'Buy My Toys | 購入完了';
  // メイン部分定義
  $main = 'done_buying';
}



// 会員登録ボタンクリック時
if (isset($_GET['singin'])) {
  header('Location:./regist.php');
  exit;
}

// ###ログイン機能
if (isset($_POST['login'])) {
  if ($_SESSION['token'] != $_POST['login']['token']) {
    require_once './tpl/error';
    exit;
  }
  $id_mail = isset($_POST['login']['id_mail']) ? htmlspecialchars($_POST['login']['id_mail'], ENT_QUOTES)  : '';
  $password = isset($_POST['login']['password']) ? htmlspecialchars($_POST['login']['password'], ENT_QUOTES)  : '';
  // IDもしくはメールアドレスをもとにハッシュ値取得
  $hash_user = get_hash_user($id_mail);
  if (password_verify($password, $hash_user['member_password'])) {
    $_SESSION['user_id'] = $hash_user['member_id'];
    call_tamplate('login_header', 'Buy My Toys | おもちゃさがしをかんたんに フリマサイト', 'lineup', 'top_footer');
    exit;
  } else {
    $errors = "入力されたIDもしくはメールアドレスまたはパスワードが違います。";
    call_tamplate('nologin_header', 'Buy My Toys | おもちゃさがしをかんたんに フリマサイト', 'lineup', 'top_footer');
    exit;
  }
}

// マイページ
if (isset($_GET['mypage'])) {
  $member_id = $_SESSION['user_id'];
  $user_data = get_member_info($member_id);
  $header = 'mypage_header';
  $main = 'mypage';
}
if (isset($_POST['address_setting'])) {

  $header = 'mypage_header';
  $main = '';
}
// CSRF対策関数
$token = create_csrf_token();
// ###ヘッダー呼び出し
require_once "tpl/header/$header.php";
// データ呼び出し格納
$products = lineup();
// ###メイン部分呼び出し
require_once "tpl/main/$main.php";
// ###フッター呼び出し
require_once "tpl/footer/$footer.php";
