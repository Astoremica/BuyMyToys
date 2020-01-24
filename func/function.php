<?php
function lineup()
{
    // print("***** you call lineup *****");
    // DBに接続
    // $cn = mysqli_connect('HOST_NAME','USER','PASSWORD','DB_NAME');

    // DBでの文字コードを指定
    // mysqli_set_charset($cn,'utf8');

    //SQL文を設定する(今回は先頭から30件)

    //SQL文を元にクエリ実行、結果を$resultに格納
    // $result = mysqli_query($cn,$sql);

    // 情報を配列に格納
    // while ($db_data = mysqli_fetch_assoc($result)) {
    //     $output_array[] = $db_data;
    // }

    // 配列を返す
    // return $output_array


    //レゴブロックの人の画像が見つからなかったので英紀のトナカイ売ります。
    $products = [
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ１",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "1980",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ２",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "19800",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ３",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ４",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "1980",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ５",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198000",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ６",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "19800",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ７",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198000",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ８",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "1980",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ９",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ１０",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ１",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ２",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ３",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ４",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ５",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "19800",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ６",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ７",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ８",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ９",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id' => 'product_detail',
            'img' => "./images/materials/toys_boy.png",
            'title' => "おもちゃ１０",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],

    ];


    return $products;

}


//sql系の操作を一括で管理するファイル(予定？)
//---------------- SQL接続テンプレ ----------------//
//  DB接続先のパラメータ設定（多分固定？）
//  $cn = mysqli_connect($host_name,$user,$password,$db_name);

//  ついでに文字型も指定しておく
//  コネクトmysqli_set_charset($cn,'utf8');

//  SQL文をセットする(入力値、<sqlの種類>)
//  $sql = "SELECT link, title, FROM table_name;";
//  $sql = "INSERT INTO table_name;
//  $sql = "UPDATE row colmun = '***' ;";

//  セットされたSQL文を実行、戻り値に指定
//  return mysqli_query($cn,$sql);

//---------------- SQL接続テンプレ ----------------//



//---------------- メッセージ全件取得 ----------------//
//  DB接続先のパラメータ設定（多分固定？）
//  $cn = mysqli_connect($host_name,$user,$password,$db_name);

//  ついでに文字型も指定しておく
//  コネクトmysqli_set_charset($cn,'utf8');

//  SQL文をセットする(入力値、<sqlの種類>)

//  $sql = "SELECT message, date, FROM table_name WHERE del_flg = 0;";

//  セットされたSQL文を実行、戻り値にする
//  return mysqli_query($cn,$sql);

//---------------- メッセージ全件取得 ----------------//

//---------------- 入力メッセージ送信 ----------------//
//  DB接続先のパラメータ設定（多分固定？）
//  $cn = mysqli_connect($host_name,$user,$password,$db_name);

//  ついでに文字型も指定しておく
//  コネクトmysqli_set_charset($cn,'utf8');

//  SQL文をセットする(入力値、<sqlの種類>)

//  $sql = "新しくメッセージとその日時を追加;";

//  セットされたSQL文を実行
//  mysqli_query($cn,$sql);

//---------------- 入力メッセージ送信 ----------------//

//---------------- 指定メッセージ削除 ----------------//
//  DB接続先のパラメータ設定（多分固定？）
//  $cn = mysqli_connect($host_name,$user,$password,$db_name);

//  ついでに文字型も指定しておく
//  コネクトmysqli_set_charset($cn,'utf8');

//  SQL文をセットする(入力値、<sqlの種類>)
//  $sql = "del_flg = 1;";

//  セットされたSQL文を実行
//  mysqli_query($cn,$sql);

//指定したテキストの削除フラグを立てる関数 <削除>



//---------------- チェック系関数 ----------------//
//リミットチェック（文字数が規定の範囲で収まっているとpass）


//フォーマットチェック（文字型や特殊文字が含まれていないとpass）


//NGワード（ガイドラインに反する文字列がなければpass）


//---------------- プロセスフロー ----------------//
//<start><更新>
//<process><追加> → <更新>
//<process><削除> → <更新>
//<end>


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
