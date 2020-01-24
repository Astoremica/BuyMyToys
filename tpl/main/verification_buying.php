<?php
// db接続
$cn = mysqli_connect('127.0.0.1','root','root','buymytoys');
mysqli_set_charset($cn,'utf8');

$sql = "SELECT i.product_id, i.product_name, i.product_price, c.category_name, i.product_description
        FROM product_information AS i, product_category AS c
        WHERE product_id = '0000008' AND category_id = 'K25'
        ;";
$result = mysqli_query($cn,$sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($cn);


$file = "./images/upload/".$row["product_id"]."/";
$main_image = $file."image1.jpg";
// $image1 = $file."image2.jpg";
// $image2 = $file."image3.jpg";

$product = array(
  $row["product_name"],
  $main_image,
  $row["category_name"],
  $row["product_description"],
  $row["product_price"],
);

$tax = '税込';

// 各情報の取り方
// 商品タイトル：product_nameから取得
// 商品説明文：product_descriptionから取得
// 商品カテゴリー：product_categoryから取得したidからcategory_nameを取得
// 出品者名：わかんね

?>
<div id="verification_buying">
    <h1><?php echo $product[0]; ?></h1>
  <h2><img src=<?php echo $product[1]; ?>></h2>

  <ul>
    <li>カテゴリ:<?php echo $product[2]; ?></li>
    <li>配送方法:まさる堂らくらくパック</li>
    <li>商品説明<br>
      <pre><?php echo $product[3]; ?><pre>
    </li>
    <li>&yen;<?php echo $product[4]; ?>(<?php echo $tax; ?>)</li>
  </ul>

    <form action="./index.php" method="post">
    <input type="hidden" value="<?php echo $product_id ?>" name="product_id">
        <input type="submit" name="verification_to_done_buying" value="購入する">
        <input type="submit" name="lineup" value="TOPに戻る">
    </<form>
</div>
