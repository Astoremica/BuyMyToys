<?php

$title = $_POST['p_title'];
$image1 = $_FILES['image1'];
$image2 = $_FILES['image2'];
$image3 = $_FILES['image3'];
$price = $_POST['p_price'];
$description = $_POST['p_description'];

// 表示価格の変更
$price *= 1.1;
$price += 500;

move_uploaded_file($image1['tmp_name'], './images/upload/' .'image1.jpg');
move_uploaded_file($image2['tmp_name'], './images/upload/' .'image2.jpg');
move_uploaded_file($image3['tmp_name'], './images/upload/' .'image3.jpg');
?>
<div id="verification_exhibits">
    <h1>出品の確認</h1>
    <form action="./index.php" method="post">

        <p>商品名：<?php echo $title ?></p>
        <p>商品画像</p>
        <ul>
            <li><img src="./images/upload/image1.jpg"></li>
            <li><img src="./images/upload/image2.jpg"></li>
            <li><img src="./images/upload/image3.jpg"></li>
        </ul>

        <p>商品説明<br>
            <textarea name="request" rows="4" cols="40"><?php echo $description ?></textarea>
        </p>

        <h3>商品価格：<?php echo $price ?>円</h3>

        <p><input type="submit" value="出品する" name="verification_to_done"></p>
    </form>
</div>
<!-- <script> print("510"); </script> -->