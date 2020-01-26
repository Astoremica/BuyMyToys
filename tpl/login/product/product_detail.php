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
    <!-- 左上に戻るがあるヘッダー用スタイル -->
    <link rel="stylesheet" href="./css/back_header_style.css">
    <!-- 商品詳細画面での画像のサイズを横幅いっぱいに -->
    <link rel="stylesheet" href="./css/product_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Buy By Toys | 商品詳細</title>
</head>

<body>
    <header>
        <h1> <?php echo $product["title"]; ?></h1>
        <p id="back_button"><a href="#" onclick="history.back(); return false;"><img src="./images/materials/back_arrow.png" alt="戻る"></a></p>
    </header>
    <div id="details">
        <p><img src="<?php echo $product["image"]; ?>"></p>

        <ul>
            <li>出品者名：<?php echo $product["member_name"]; ?></li>
            <li>カテゴリ：<?php echo $product["category"]; ?></li>
            <li>配送方法：まさる堂らくらくパック</li>
            <li>商品説明：
                <pre><?php echo $product["description"]; ?><pre></li>
            <li>&yen;<?php echo $product["price"]; ?>(税込)</li>
        </ul>
        <form action="./index.php" method="post">
            <button type="submit" value="<?php echo $product_id ?>" name="product_to_verification" id="confirm">こうにゅう画面へ！</button>
            <button type="submit" id="back" name="lineup">ちがうおもちゃをみる</button>
        </form>
        <?php foreach ($row as $reco) : ?>
        <article>
            <form action="./index.php" method="post">
                <button name="product_detail">
                    <h2><img src="<?php echo $reco['image']; ?>" alt="商品"></h2>
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