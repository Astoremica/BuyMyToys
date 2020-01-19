<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <!-- 未ログイン時のヘッダーCSS -->
    <link rel="stylesheet" href="./css/nologin_header_style.css">
    <!-- 商品一覧表示用のCSS -->
    <link rel="stylesheet" href="./css/lineup_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <nav>
            <button id="login_icon" type="submit"><img src="./images/materials/login.png"></button>
            <h1 id="page_top">
                <a href="">
                    <img src="./images/materials/toys_boy_white.png" alt="Buy My Toys">
                </a>
            </h1>
            <p id="search_icon"><img src="./images/materials/search.png" alt="商品検索"></p>
        </nav>
        <div id="login_form">
            <p id="close_icon"><img src="./images/materials/close.png" alt="閉じる"></p>
            <form id="login_form_content" action="" method="post">
                <p id="loginform_logo">
                    <img src="./images/materials/toys_boy.png" alt="ロゴ">
                    <span>Buy My Toys</span>
                </p>
                <ul>
                    <li><input type="text" name="email" placeholder="メールアドレス"></li>
                    <li><input type="password" name="password" placeholder="パスワード"></li>
                    <li><button type="submit">ログイン</button></li>
                </ul>
                <p id="sing_in">アカウントを持っていない場合&nbsp;<a href="<?php echo BASE_URL; ?>?singin=''">登録はこちら</a></p>
            </form>
        </div>
    </header>