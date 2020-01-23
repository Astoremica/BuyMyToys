<?php
// require_once('商品詳細情報');
require_once './func/function.php';
$product_title = '商品タイトル名';
$intro = '商品説明文';
$user_name = '出品者名';
$category1 = 'カテゴリー１';
$category2 = 'カテゴリー２';
$maker = 'メーカー名';
$status = '商品の状態';
$how_send = '発送方法';
$prefecture = '発送地域';
$sendday = '同着予想日数';
$main_image = './images/upload/image1.jpg';
$description_pre = '商品詳細説明';
$value = 100;
$tax = '税込';

// +---------------------+--------------+------+-----+---------+-------+
// | Field               | Type         | Null | Key | Default | Extra |
// +---------------------+--------------+------+-----+---------+-------+
// | product_id          | varchar(7)   | NO   |     | NULL    |       |
// | product_name        | varchar(255) | NO   |     | NULL    |       |
// | product_price       | int(7)       | NO   |     | NULL    |       |
// | product_category    | varchar(3)   | NO   |     | NULL    |       |
// | product_description | varchar(255) | NO   |     | NULL    |       |
// | product_regist_date | date         | NO   |     | NULL    |       |
// | trade_flg           | int(1)       | NO   |     | NULL    |       |
// | del_flg             | int(1)       | NO   |     | NULL    |       |
// +---------------------+--------------+------+-----+---------+-------+

// これらの情報はdbから引っ張る予定です。
// 実際は前のページから商品IDだけPOSTで受け取って、商品詳細テーブルの同一IDのデータ一件を拾ってきて表示します。
?>

<div id="details">

  <h1><?php echo $product_title; ?></h1>
  <form action="./index.php" method="post">
    <h2 id="intro"><?php echo $intro ?></h2>
    <h2><img src="<?php echo $main_image; ?>"></h2>

    <ul>
      <li>出品者:<?php echo $user_name; ?></li>
      <li>カテゴリ:<?php echo $category1.','. $category2; ?></li>
      <li>メーカー:<?php echo $maker; ?></li>
      <li>商品の状態:<?php echo $status; ?></li>
      <li>配送料の負担:<?php echo $how_send; ?></li>
      <li>配送方法:まさる堂らくらくパック</li>
      <li>配送元地域:<?php echo $prefecture; ?></li>
      <li>大まかな発送日:<?php echo $sendday; ?></li>
      <li>&yen;<?php echo $value; ?>(<?php echo $tax; ?>)</li>
    </ul>

    <input type="submit" value="購入画面に進む" id="submit" name="product_to_verification">
    <input type="submit" value="TOPに戻る" id="submit" name="lineup">

  </form>

  <div id="description" class="compose">
    <pre><?php echo $description_pre; ?><pre>
      <!-- preタグで改行とかも込み込み表示-->
  </div>

  <div class="compose">
    <div class="goods">
    <?php foreach ($row as $reco) : ?>
        <article>
          <form action="./index.php" method="post">
          <button name="product_detail">
            <h2><img src="<?php echo $reco['img']; ?>" alt="商品"></h2>
            <p class="price">&yen;<?php echo $reco['price']; ?></p>
            <p class="about">
              <?php echo $reco['intro']; ?>
            </p>
          </button>
        </form>
        </article>
    <?php endforeach; ?>
    </div><!-- goods -->
  </div><!-- compose -->
</div>