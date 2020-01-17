<?php
function lineup()
{
    // print("***** you call lineup *****");

    //架空のDBに接続
    // $cn = mysqli_connect('HOST_NAME','USER','PASSWORD','DB_NAME');

    //架空のDBでの文字コードを指定
    // mysqli_set_charset($cn,'utf8');

    //SQL文を設定する(今回は先頭から30件)
    // $sql = "SELECT link, title, intro, price ΩFROM production_table LIMIT 0,30";

    //SQL文を元にクエリ実行、結果を$resultに格納
    // $result = mysqli_query($cn,$sql);

    //
    //$row = mysqli_fetch_assoc($result);

    //レゴブロックの人の画像が見つからなかったので英紀のトナカイ売ります。
    $row = [
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん１",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "1980",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん２",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "19800",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん３",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん４",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "1980",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん５",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198000",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん６",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "19800",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん７",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198000",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん８",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "1980",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん９",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん１０",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん１",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん２",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん３",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん４",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん５",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "19800",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん６",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん７",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん８",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん９",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],
        [
            'id'=>'product_detail',
            'img' => "./images/materials/toys_boy.PNG",
            'title' => "バイマイトイズくん１０",
            'intro' => "ひでのりが作ったこのアイコンを売ります。",
            'price' => "198",
        ],

    ];


    return $row;

    // $rowが空になったらnullが入り、whileが終了する。
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
