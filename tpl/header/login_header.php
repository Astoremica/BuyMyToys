<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ホーム画面に追加時アドレスバー非表示 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- ホーム画面に表示されるアプリ名 -->
    <meta name="apple-mobile-web-app-title" content="Buy My Toys">
    <!-- ホーム画面に表示されるアプリアイコン -->
    <link rel="apple-touch-icon" sizes="180x180" href="./images/materials/toys_boy_icon.png">
    <link rel="stylesheet" href="./css/reset.css">
    <!-- ログイン時のヘッダーCSS -->
    <link rel="stylesheet" href="./css/login_header_style.css">
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
            <button id="mypage_icon"><img src="./images/user_icon/no_4/user_profile.jpg"></button>
            <h1 id="page_top">
                <a href="">
                    <img src="./images/materials/toys_boy_white.png" alt="Buy My Toys">
                </a>
            </h1>
            <p id="search_icon"><img src="./images/materials/search.png" alt="商品検索"></p>
        </nav>
        <div id="system_list">
            <form action="" method="post">
                <button id="home_icon"><img src="./images/materials/home_icon.png"></button>
                <button id="camera_icon"><img src="./images/materials/camera_icon.png"></button>
                <button id="favorite_icon"><img src="./images/materials/favorite_white_icon.png"></button>
                <button id="cart_icon"><img src="./images/materials/cart_icon.png"></button>
            </form>
        </div>
    </header>