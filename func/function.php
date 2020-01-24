<?php
function lineup()
{
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');

    $sql = "SELECT i.product_id, i.product_name, i.product_price
            FROM product_information AS i
            ORDER BY i.product_regist_date DESC
            LIMIT 30;";
    $result = mysqli_query($cn,$sql);

    mysqli_close($cn);

//     i.product_id, i.product_name, i.product_price

    for($i = 0; $i < 30; $i ++){
        $row = mysqli_fetch_assoc($result);
        $products[] = [
            'id' => $row["product_id"],
            'img' => "./images/upload/".$row["product_id"]."/image1.jpg",
            'title' => $row["product_name"],
            'price' => $row["product_price"],
        ];
    }

    // for($i = 0; $i < 30; $i ++){
    //     $products[] = [
    //         'id' => $i."表示はしない？",
    //         'img' => "./images/upload/0000000/image1.jpg",
    //         'title' => "おもちゃ".$i,
    //         'price' => "100",
    //     ];
    // }
    return $products;
}

// function show_detail(){
//     db接続 最新の出品商品、つまり出品日時の大きい方から30件取得するようにしたいね
//     $cn = mysqli_connect('127.0.0.1','root','root','buymytoys');
//     mysqli_set_charset($cn,'utf8');

//     $sql = "SELECT i.product_id, i.product_name, i.product_price, c.category_name, i.product_description
//             FROM product_information AS i, product_category AS c
//             WHERE product_id = '0000000' AND category_id = 'K25'
//             ;";
//     $result = mysqli_query($cn,$sql);
//     $row = mysqli_fetch_assoc($result);

//     mysqli_close($cn);


//     $file = "./images/upload/".$row["product_id"]."/";
//     $main_image = $file."image1.jpg";
//     // $image1 = $file."image2.jpg";
//     // $image2 = $file."image3.jpg";

//     $product = array(
//     $row["product_name"],
//     $main_image,
//     $row["category_name"],
//     $row["product_description"],
//     $row["product_price"],
//     );
// }


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
    $result = mysqli_query($cn,$sql);

    $result = mysqli_query($cn, $sql);
    $db_data = mysqli_fetch_assoc($result);

    return $db_data;
}
