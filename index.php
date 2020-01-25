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
  session_destroy();
  header('Location:./index.php');
  exit;
}

// ログイン状態か判定
if (isset($_SESSION['member_id'])) {
  $header = 'login_header';
}

// ###商品詳細ボタンクリック時の動作
if (isset($_GET['product_detail'])) {
  $product_id = $_GET['product_detail'];
  $product = get_product_details($product_id);
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

// ################### 商品出品系 ##########################

// ###出品ボタンクリック時の動作
if (isset($_GET['exhibits_button'])) {
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy By Toys | 出品';
  // メイン部分定義
  $main = 'exhibits';
}

// ###出品画面から出品確認ボタンが押されたときの動作
if (isset($_POST['exhibits_to_verification'])) {
  // verification_exhibits();
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy My Toys | 出品の確認';
  // メイン部分定義
  $main = 'verification_exhibits';
}

// ###出品確認画面から出品確定ボタンが押されたときの動作
if (isset($_POST['verification_to_done'])) {
  // done_exhibits();
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy My Toys | 出品完了';
  // メイン部分定義
  $main = 'done_exhibits';
}

// ##################### 商品購入系 ########################

// ###商品詳細ボタンクリック時の動作
if (isset($_GET['product_detail'])) {
  $product_id = $_GET['product_detail'];
  $product = get_product_details($product_id);
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy By Toys | 商品詳細';
  // メイン部分定義
  $main = 'product_detail';
}

// ###商品詳細から商品購入確認が押されたときの動作
if (isset($_POST['product_to_verification'])) {
  $product_id = $_POST["product_to_verification"];
  $product = verification_buying($product_id);
  $header = 'login_header';
  // タイトル格納
  $title = 'Buy My Toys | 購入の確認';
  // メイン部分定義
  $main = 'verification_buying';
}

// ###商品購入確認から商品購入確定が押されたときの動作
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
    $_SESSION['member_id'] = $hash_user['member_id'];
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
  $member_id = $_SESSION['member_id'];
  $user_data = get_member_info($member_id);
  $header = 'mypage_header';
  $main = 'mypage';
}
// 住所設定
if (isset($_GET['address_info'])) {
  $member_id = $_GET['address_info'];
  $address_info = get_address($member_id);
  if (empty($address_info)) {
    $address_info = '住所は登録されていません。';
  }
  require_once './tpl/login/address_info.php';
  exit;
}
if (isset($_POST['add_address'])) {
  $member_id = $_SESSION['member_id'];
  require_once './tpl/login/address_enter.php';
  exit;
}
// 住所入力
if (isset($_POST['enter_address'])) {

  $member_id = $_POST['enter_address']['member_id'];
  // 郵便番号に"-"を追加するため
  $zipcode = isset($_POST['enter_address']['zipcode']) ? htmlspecialchars(mb_substr($_POST['enter_address']['zipcode'], 0, 3), ENT_QUOTES) : '';
  $zipcode .= isset($_POST['enter_address']['zipcode']) ? '-' . htmlspecialchars(mb_substr($_POST['enter_address']['zipcode'], 3, 6), ENT_QUOTES) : '';
  // 都道府県
  $address = isset($_POST['enter_address']['addr01']) ? htmlspecialchars($_POST['enter_address']['addr01'], ENT_QUOTES) : '';
  // 市区町村
  $address .= isset($_POST['enter_address']['addr02']) ? htmlspecialchars($_POST['enter_address']['addr02'], ENT_QUOTES) : '';
  // 番地
  $address .= isset($_POST['enter_address']['house_number']) ? htmlspecialchars($_POST['enter_address']['house_number'], ENT_QUOTES) : '';
  // マンション等
  $address .= isset($_POST['enter_address']['building_name']) ? '　' . htmlspecialchars($_POST['enter_address']['building_name'], ENT_QUOTES) : '';
  // 名義
  $name = isset($_POST['enter_address']['name']) ? htmlspecialchars($_POST['enter_address']['name'], ENT_QUOTES) : '';
  $add_address = [
    'zip' => $zipcode,
    'address' => $address,
    'name' => $name
  ];
  $_SESSION['add_address'] = $add_address;
  require_once './tpl/login/confirm_add_address.php';
  exit;
}
// 住所登録
if (isset($_POST['regist_address'])) {
  $member_id = $_SESSION['member_id'];
  $add_address = $_SESSION['add_address'];
  add_address($member_id, $add_address['zip'], $add_address['address'], $add_address['name']);
  unset($_SESSION['add_address']);
  header("Location:./index.php?address_info=$member_id");
  exit;
}
// 銀行口座情報表示ページ
if (isset($_GET['bank_info'])) {
  $member_id = $_GET['bank_info'];
  $bank_info = get_bank($member_id);
  if (empty($bank_info)) {
    $bank_info = '口座は登録されていません。';
  }
  require_once './tpl/login/bank_info.php';
  exit;
}
// 銀行口座情報入力ページ
if (isset($_POST['add_bank'])) {
  $member_id = $_SESSION['member_id'];
  require_once './tpl/login/bank_enter.php';
  exit;
}
// 銀行口座入力情報確認ページ

if (isset($_POST['enter_bank'])) {
  $member_id = $_POST['enter_bank']['member_id'];
  // 金融機関名配列
  $bank_name_list_array=[
    '三菱UFJ銀行',
    'みずほ銀行',
    'りそな銀行',
    '埼玉りそな銀行',
    '三井住友銀行',
    'ジャパネット銀行',
    '楽天銀行',
    'ゆうちょ銀行'
  ];
  // 金融機関名
  $bank_name_index = $_POST['enter_bank']['bank_name'];
  $bank_name = $bank_name_list_array[$bank_name_index];
  // 支店コード
  $branch_number = isset($_POST['enter_bank']['branch_number']) ? htmlspecialchars($_POST['enter_bank']['branch_number'], ENT_QUOTES) : '';
  // 支店名
  $branch_name = isset($_POST['enter_bank']['branch_name']) ? htmlspecialchars($_POST['enter_bank']['branch_name'], ENT_QUOTES) : '';
  // 口座番号
  $bank_number = isset($_POST['enter_bank']['bank_number']) ? htmlspecialchars($_POST['enter_bank']['bank_number'], ENT_QUOTES) : '';
  // 名義セイ
  $bank_holder = isset($_POST['enter_bank']['bank_holder_last']) ? htmlspecialchars($_POST['enter_bank']['bank_holder_last'], ENT_QUOTES) : '';
  // 名義セイ+メイ
  $bank_holder .= isset($_POST['enter_bank']['bank_holder_first']) ? htmlspecialchars($_POST['enter_bank']['bank_holder_first'], ENT_QUOTES) : '';

  $add_bank = [
    'bank_name' => $bank_name,
    'branch_number' => $branch_number,
    'branch_name' => $branch_name,
    'bank_number' => $bank_number,
    'bank_holder' => $bank_holder
  ];
  $_SESSION['add_bank'] = $add_bank;
  require_once './tpl/login/confirm_add_bank.php';
  exit;
}
// 口座登録
if (isset($_POST['regist_bank'])) {
  $member_id = $_SESSION['member_id'];
  $add_bank = $_SESSION['add_bank'];
  var_dump($add_bank);
  var_dump($_SESSION['add_bank']);
  add_bank($member_id, $add_bank['bank_name'], (int)$add_bank['branch_number'], $add_bank['branch_name'],(int)$add_bank['bank_number'],$add_bank['bank_holder']);
  unset($_SESSION['add_bank']);
  header("Location:./index.php?bank_info=$member_id");
  exit;
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
