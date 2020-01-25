<?php

//------------------------------------------------ 商品購入 ------------------------------------------------//
function lineup()
{   " 販売中の商品を一覧表示 ";
    $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($cn, 'utf8');
    $sql = "SELECT i.product_id AS id, i.product_name AS title, i.product_price AS price
            FROM product_information AS i
            WHERE del_flg = 0 AND trade_flg = 0
            ORDER BY i.product_regist_date DESC
            LIMIT 60;";
    $result = mysqli_query($cn, $sql);
    mysqli_close($cn);

    while ($db_data = mysqli_fetch_assoc($result)) {
        $products[] = [
            'id' => $db_data['id'],
            'title' => $db_data['title'],
            'price' => $db_data['price'],
            'img' => "./images/upload/" . $db_data["id"] . "/image1.jpg"
        ];
    }
    return $products;
}

function select_product_detail($product_id)
{
    $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($cn, 'utf8');
    $sql = "SELECT i.product_name, m.member_name, c.category_name, i.product_description, i.product_price
            FROM product_information AS i, members AS m, product_category AS c
            WHERE i.product_id = ".$product_id."
            AND m.member_id = (
                SELECT member_id
                FROM product_information
                WHERE product_id = ".$product_id."
            ) AND c.category_id = (
                SELECT product_category
                FROM product_information
                WHERE product_id = ".$product_id."
            );";
    $result = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($cn);

    return $row;
}

function verification_buying($product_id)
{   " 商品確認画面でのmysql接続 ";

    $row = select_product_detail($product_id);
    $file = "./images/upload/".$product_id."/";
    $main_image = $file."image1.jpg";
    // $image1 = $file."image2.jpg";
    // $image2 = $file."image3.jpg";

    $product = [
        'title' => $row['product_name'],
        'image' => $main_image,
        'member_name' => $row['member_name'],
        'category' =>  $row["category_name"],
        'description' => $row["product_description"],
        'price' => $row["product_price"],
    ];
    return $product;
}

function get_product_details($product_id)
{   " 商品詳細画面でのmysql接続 ";

    $row = select_product_detail($product_id);
    $file = "./images/upload/" . $product_id . "/";
    $main_image = $file . "image1.jpg";
    // $image1 = $file."image2.jpg";
    // $image2 = $file."image3.jpg";
    $product = [
        'title' => $row['product_name'],
        'image' => $main_image,
        'member_name' => $row['member_name'],
        'category' =>  $row["category_name"],
        'description' => $row["product_description"],
        'price' => $row["product_price"],
    ];
    return $product;
}



//------------------------------------------------ 会員機能 ------------------------------------------------//
function create_csrf_token()
{
    //クロスサイトリクエスフォージェリ（CSRF）対策
    $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    $token = $_SESSION['token'];
    return $token;
}

function alredy_member_check($cn, $mail)
{
    $sql = "SELECT COUNT(*) as count FROM members WHERE member_mail = '$mail'";
    $result = mysqli_query($cn, $sql);
    $db_data = mysqli_fetch_assoc($result);

    return $db_data['count'];
}
function add_pre_member($cn, $urltoken, $mail)
{
    $sql = "INSERT INTO pre_member (urltoken,mail,date) VALUES ('$urltoken','$mail',now())";
    mysqli_query($cn, $sql);

    return;
}
function check_token($cn, $urltoken)
{
    //flagが0の未登録者・仮登録日から24時間以内
    //24時間以内に仮登録され、本登録されていないトークンの場合
    $sql = "SELECT mail FROM pre_member WHERE urltoken = '$urltoken' AND flag = 0 AND date > now() - interval 24 hour";
    $result = mysqli_query($cn, $sql);
    $db_data = mysqli_fetch_assoc($result);

    return $db_data;
}
//前後にある半角全角スペースを削除する関数
function spaceTrim($str)
{
    // 行頭
    $str = preg_replace('/^[　]+/u', '', $str);
    // 末尾
    $str = preg_replace('/[　]+$/u', '', $str);
    return $str;
}
function alredy_member_id_check($cn, $member_id)
{
    $sql = "SELECT COUNT(*) as count FROM members WHERE member_id = '$member_id'";
    $result = mysqli_query($cn, $sql);
    $db_data = mysqli_fetch_assoc($result);

    return $db_data['count'];
}

function add_member($cn, $member_id, $member_name, $member_nickname, $member_gender, $member_mail, $password_hash, $member_tel, $member_birthday)
{
    $sql = "INSERT INTO members(member_id,member_name,member_nickname,member_gender,member_mail,member_password,member_tel,member_birthday) VALUES('$member_id','$member_name','$member_nickname','$member_gender','$member_mail','$password_hash','$member_tel','$member_birthday')";
    mysqli_query($cn, $sql);
    return;
}
function update_pre_member($cn, $mail)
{
    $sql = "UPDATE pre_member SET flag=1 WHERE mail='$mail'";
    mysqli_query($cn, $sql);
    return;
}

function get_hash_user($id_mail)
{
    //データベース接続
    $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($cn, 'utf8');
    // IDかメールか
    if (strpos($id_mail, '@') === false) {
        // ID
        $sql = "SELECT member_id,member_password FROM members WHERE member_id = '$id_mail'";
    } else {
        // mail
        $sql = "SELECT member_id,member_password FROM members WHERE member_mail = '$id_mail'";
    }
    $result = mysqli_query($cn, $sql);
    $db_data = mysqli_fetch_assoc($result);
    return $db_data;
}

function call_tamplate($header, $title, $main, $footer)
{
    //クロスサイトリクエスフォージェリ（CSRF）対策
    $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    $token = $_SESSION['token'];
    // ###ヘッダー呼び出し
    require_once "tpl/header/$header.php";
    // データ呼び出し格納
    $products = lineup();
    // ###メイン部分呼び出し
    require_once "tpl/main/$main.php";
    // ###フッター呼び出し
    require_once "tpl/footer/$footer.php";
    return;
}
function get_member_info($member_id)
{
    $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($cn, 'utf8');
    $sql = "SELECT member_key,member_name,member_nickname FROM members WHERE member_id = '$member_id'";
    $result = mysqli_query($cn, $sql);

    $result = mysqli_query($cn, $sql);
    $db_data = mysqli_fetch_assoc($result);

    return $db_data;
}
