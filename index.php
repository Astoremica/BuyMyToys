<?php
session_start();
// 関数ファイル
require_once "./func/function.php";
// configファイル
require_once '../config.php';


// ################### 商品出品系 ##########################

// ###出品ボタンクリック時の動作
if (isset($_GET['exhibits_button'])) {
  unlink('./images/tpl/*');
  require_once './tpl/login/product/exhibits.php';
  exit;
}

// ###出品画面から出品確認ボタンが押されたときの動作
if (isset($_POST['exhibits_to_verification'])) {
  // DB connection
  $row = get_category_name($_POST['category']);

  $name = $_POST['name'];
  $member_id = $_SESSION['member_id'];
  $category = $row["category_name"];
  $category_id = $_POST['category'];
  $image1 = $_FILES['image1'];
  $image2 = $_FILES['image2'];
  $image3 = $_FILES['image3'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $price *= 1.1;
  $price += 500;
  unlink_if_isnot_uploaded($image1, $image2, $image3);
  move_upload_file_if_is_upliaded($image1, $image2, $image3);
  require_once './tpl/login/product/verification_exhibits.php';
  exit;
}

// ###出品確認画面から出品確定ボタンが押されたときの動作
if (isset($_POST['verification_to_done'])) {
  // DB connection
  $insert_num = get_new_exhibits_product_id();

  $product_id = $insert_num['num'];

  // 新規フォルダ作成
  mkdir("./images/upload/" . $product_id . "", 0700);

  // 画像の移動
  rename("images/upload/tpl/image1.jpg", "./images/upload/" . $product_id . "/image1.jpg");
  rename("images/upload/tpl/image2.jpg", "./images/upload/" . $product_id . "/image2.jpg");
  rename("images/upload/tpl/image3.jpg", "./images/upload/" . $product_id . "/image3.jpg");

  $product_id = $insert_num['num'];
  $member_id = $_SESSION['member_id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $category_id = $_POST['category_id'];
  $description = $_POST['description'];

  $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
  mysqli_set_charset($cn, 'utf8');
  $sql = "INSERT INTO product_information VALUES(
          '" . $product_id . "',
          '" . $member_id . "',
          '" . $name . "',
          " . $price . ",
          '" . $category_id . "',
          '" . $description . "',
          DATETIME(NOW()),
          0,
          0);";
  $result = mysqli_query($cn, $sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($cn);

  require_once './tpl/login/product/done_exhibits.php';
  exit;
}

// ##################### 商品購入系 ########################

// ###商品詳細ボタンクリック時の動作
if (isset($_GET['product_detail'])) {
  $product_id = $_GET['product_detail'];
  $product = get_product_details($product_id);
  require_once './tpl/login/product/product_detail.php';
  exit;
}
// ###商品詳細から商品購入確認が押されたときの動作
if (isset($_POST['product_to_verification'])) {
  $product_id = $_POST["product_to_verification"];
  $product = verification_buying($product_id);
  require_once './tpl/login/product/verification_buying.php';
  exit;
}

// ###商品購入確認から商品購入確定が押されたときの動作
if (isset($_POST['verification_to_done_buying'])) {

  $product_id = $_POST['verification_to_done_buying'];

  $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
  mysqli_set_charset($cn, 'utf8');
  $sql = "UPDATE product_information
          SET del_flg  = 1
          WHERE product_id = " . $product_id . ";";
  $result = mysqli_query($cn, $sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($cn);

  $file = "./images/upload/" . $product_id . "/";
  $image1 = $file . "/image1.jpg";
  $image2 = $file . "/image2.jpg";
  $image3 = $file . "/image3.jpg";

  // ブラウザバックされたら普通に戻れるけど今は放置で
  require_once './tpl/login/product//done_buying.php';
  exit;
}

// ##################### 会員系 ########################


if (isset($_GET['login_form'])) {
  require_once './tpl/nologin/login_form.php';
  exit;
}

// 会員登録ボタンクリック時
if (isset($_GET['singin'])) {
  header('Location:./regist.php');
  exit;
}

// ###ログイン機能
if (isset($_POST['login'])) {
  $id_mail = isset($_POST['login']['id_mail']) ? htmlspecialchars($_POST['login']['id_mail'], ENT_QUOTES)  : '';
  $password = isset($_POST['login']['password']) ? htmlspecialchars($_POST['login']['password'], ENT_QUOTES)  : '';
  // IDもしくはメールアドレスをもとにハッシュ値取得
  $hash_user = get_hash_user($id_mail);
  if (password_verify($password, $hash_user['member_password'])) {
    $_SESSION['member_id'] = $hash_user['member_id'];
    $member_key = get_member_key($_SESSION['member_id']);
    $products = lineup();
    require_once './tpl/login/login_top.php';
    exit;
  } else {
    $products = lineup();
    require_once './tpl/nologin/nologin_top.php';
    exit;
  }
}

// マイページ
if (isset($_GET['mypage'])) {
  $member_id = $_SESSION['member_id'];
  $user_data = get_member_info($member_id);
  require_once './tpl/login/member/mypage.php';
  exit;
}
// 住所設定
if (isset($_GET['address_info'])) {
  $member_id = $_GET['address_info'];
  $address_info = get_address($member_id);
  if (empty($address_info)) {
    $address_info = '住所は登録されていません。';
  }
  require_once './tpl/login/member/address_info.php';
  exit;
}
if (isset($_POST['add_address'])) {
  $member_id = $_SESSION['member_id'];
  require_once './tpl/login/member/address_enter.php';
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
  require_once './tpl/login/member/confirm_add_address.php';
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
  require_once './tpl/login/member/bank_info.php';
  exit;
}
// 銀行口座情報入力ページ
if (isset($_POST['add_bank'])) {
  $member_id = $_SESSION['member_id'];
  require_once './tpl/login/member/bank_enter.php';
  exit;
}
// 銀行口座入力情報確認ページ

if (isset($_POST['enter_bank'])) {
  $member_id = $_POST['enter_bank']['member_id'];
  // 金融機関名配列
  $bank_name_list_array = [
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
  require_once './tpl/login/member/confirm_add_bank.php';
  exit;
}
// 口座登録
if (isset($_POST['regist_bank'])) {
  $member_id = $_SESSION['member_id'];
  $add_bank = $_SESSION['add_bank'];
  var_dump($add_bank);
  var_dump($_SESSION['add_bank']);
  add_bank($member_id, $add_bank['bank_name'], (int) $add_bank['branch_number'], $add_bank['branch_name'], (int) $add_bank['bank_number'], $add_bank['bank_holder']);
  unset($_SESSION['add_bank']);
  header("Location:./index.php?bank_info=$member_id");
  exit;
}

// ログアウト
if (isset($_POST['logout'])) {
  session_destroy();
  header('Location:./index.php');
  exit;
}

// TOPページ

// ログイン状態のTOPページ：SESSIONにログイン情報がある状態で
// 一番最初に表示されるページ
if (isset($_SESSION['member_id'])) {
  // ログイン中のメンバーIDからmember_keyを取得マイページボタンの画像用
  $member_key = get_member_key($_SESSION['member_id']);
  $products = lineup();
  require_once './tpl/login/login_top.php';
  exit;
}
// 未ログイン状態のTOPページ：一番最初に表示されるページ
if (!isset($_SESSION['member_id'])) {
  $products = lineup();
  require_once './tpl/nologin/nologin_top.php';
  exit;
}
