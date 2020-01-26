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
    <!-- 左上に戻るがあるヘッダー用スタイル -->
    <link rel="stylesheet" href="./css/back_header_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Buy My Toys | 出品の確認</title>
</head>

<body>
<header>
        <h1> 出品確認</h1>
        <p id="back_button"><a href="#" onclick="history.back(); return false;"><img src="./images/materials/back_arrow.png" alt="戻る"></a></p>
    </header>

    <div id="verification_exhibits">
        <form action="./index.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
            <input type="hidden" name="image1" value="<?php echo $image1; ?>">
            <input type="hidden" name="image2" value="<?php echo $image2; ?>">
            <input type="hidden" name="image3" value="<?php echo $image3; ?>">
            <input type="hidden" name="description" value="<?php echo $description; ?>">
            <input type="hidden" name="price" value="<?php echo $price; ?>">

            <h2>商品名：<?php echo $name; ?></h2>
            <h2>商品画像</h2>
            <ul>
                <li><img src="./images/upload/tpl/image1.jpg"></li>
                <li><img src="./images/upload/tpl/image2.jpg"></li>
                <li><img src="./images/upload/tpl/image3.jpg"></li>
            </ul>

            <h2>商品説明</h2>
            <pre><?php echo $description; ?></pre>
            <h2>出品価格：<?php echo $price; ?>円</h2>

            <button type="submit" value="" name="verification_to_done">出品する</button>
            <button type="submit" value="" name="lineup">やめておく</button>
        </form>
    </div>
    <!-- <script> print("510"); </script> -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- その他の手書きjs -->
    <script src="./js/others.js"></script>
</body>

</html>