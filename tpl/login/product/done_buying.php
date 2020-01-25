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
    <!-- 商品詳細画面での画像のサイズを横幅いっぱいに -->
    <link rel="stylesheet" href="./css/product_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Buy My Toys | 購入完了</title>
</head>

<body>
    <header>
        <nav>
            <h1 id="page_top">
                <a href="./index.php">
                    <img src="./images/materials/toys_boy_white.png" alt="Buy My Toys">
                </a>
            </h1>
            <p id="search_icon"><a href="<?php echo BASE_URL; ?>index.php"><img src="./images/materials/search.png" alt="商品検索"></a></p>
        </nav>
    </header>
    <div id="done_buying">
        <h1>購入が完了しました</h1>
        <ul>
            <li class="product_image"><img src="<?php echo $image1; ?>"></li>
            <li class="product_image"><img src="<?php echo $image2; ?>"></li>
            <li class="product_image"><img src="<?php echo $image3; ?>"></li>
        </ul>
        <form action="./index.php" method="post">
            <button name="lineup">ホームにもどる</button>
            <button name="lineup">おねだりリストのかくにん</button>
            <!-- あとで出品者連絡画面に差し替えます -->
        </form>
    </div>
    <footer>
        <form action="./index.php" method="get">
            <button type="submit" class="system_icon"><img src="./images/materials/home_icon.png"></button>
            <button type="submit" class="system_icon" name="exhibits_button" value="aaa"><img src="./images/materials/camera_icon.png"></button>
            <button type="submit" class="system_icon"><img src="./images/materials/favorite_white_icon.png"></button>
            <button type="submit" class="system_icon"><img src="./images/materials/cart_icon.png"></button>
            <a href="<?php echo BASE_URL; ?>index.php?mypage=''" id="mypage_icon"><img src="./images/user_icon/no_4/user_profile.jpg"></a>
        </form>
    </footer>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- その他の手書きjs -->
    <script src="./js/others.js"></script>
</body>

</html>