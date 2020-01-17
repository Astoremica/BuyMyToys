<?php

$title = $_POST['p_title'];
// あんま覚えてないファイルの受け取り
$price = $_POST['p_price'];
$description = $_POST['p_description'];
// echo $title;
// echo $price;
$price *= 1.1;
$price += 500;
// echo $description;

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Buy My Toys | 出品の確認</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <script>
        var price = 100;
        var commission = price * 0.1;
        var sumarry = price + commission + 500;
    </script>
</head>
<body>
    <h1>出品の確認</h1>
    <form action="" method="post">

        <p>商品名：<?php echo $title ?></p>
        <p>商品画像<br>
            <img src="image1">
            <img src="image2">
            <img src="image3">
        </p>

        <p>商品説明<br>
            <textarea name="request" rows="4" cols="40"><?php echo $description ?></textarea>
        </p>

        <h3>商品価格：<?php echo $price ?>円</h3>

        <p><input type="submit" value="出品する"></p>
    </form>
    <!-- <script> print("510"); </script> -->
</body>

</html>