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

    <!-- 商品詳細画面での画像のサイズを横幅いっぱいの正方形に -->
    <link rel="stylesheet" href="./css/buying_style.css">
    <!-- ログイン時のヘッダーCSS -->
    <link rel="stylesheet" href="./css/login_header_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Buy By Toys | 商品詳細</title>
</head>

<body>
    <header>
        <nav>
            <a href="<?php echo BASE_URL; ?>index.php?mypage=''" id="mypage_icon"><img src="./images/user_icon/no_4/user_profile.jpg"></a>
            <h1 id="page_top">
                <a href="./index.php">
                    <img src="./images/materials/toys_boy_white.png" alt="Buy My Toys">
                </a>
            </h1>
            <p id="search_icon"><a href="<?php echo BASE_URL; ?>index.php"><img src="./images/materials/search.png" alt="商品検索"></a></p>
        </nav>
        <div id="system_list">
            <form action="./index.php" method="get">
                <button type="submit" id="home_icon"><img src="./images/materials/home_icon.png"></button>
                <button type="submit" id="camera_icon" name="exhibits_button" value="aaa"><img src="./images/materials/camera_icon.png"></button>
                <button type="submit" id="favorite_icon"><img src="./images/materials/favorite_white_icon.png"></button>
                <button type="submit" id="cart_icon"><img src="./images/materials/cart_icon.png"></button>
            </form>
        </div>
    </header>
    <div id="details">
        <h1>タイトル：<?php echo $product["title"]; ?></h1>
        <h2><img src="<?php echo $product["image"]; ?>"></h2>

        <ul>
            <li>出品者名：<?php echo $product["member_name"]; ?></li>
            <li>カテゴリ：<?php echo $product["category"]; ?></li>
            <li>配送方法：まさる堂らくらくパック</li>
            <li>商品説明：
                <pre><?php echo $product["description"]; ?><pre></li>
            <li>&yen;<?php echo $product["price"]; ?>(税込)</li>
        </ul>
        <form action="./index.php" method="post">
            <button type="submit" value="<?php echo $product_id ?>" name="product_to_verification">こうにゅう画面へ！</button>
            <button type="submit" id="submit" name="lineup">ちがうおもちゃをみる</button>
        </form>
        <?php foreach ($row as $reco) : ?>
        <article>
            <form action="./index.php" method="post">
                <button name="product_detail">
                    <h2><img src="<?php echo $reco['img']; ?>" alt="商品"></h2>
                    <p class="price">&yen;<?php echo $reco['price']; ?></p>
                    <p class="about"><?php echo $reco['intro']; ?></p>
                </button>
            </form>
        </article>
    <?php endforeach; ?>
    </div>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- その他の手書きjs -->
    <script src="./js/others.js"></script>
</body>

</html>