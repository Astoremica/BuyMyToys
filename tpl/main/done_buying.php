<?php
require_once './func/function.php';
$id = $_POST["product_id"];

// update trade_flg = 1;

$file = "./images/upload/".$id."/";
$image1 = $file."/image1.jpg";
// $image2 = $file."/image2.jpg";
// $image3 = $file."/image3.jpg";

// ブラウザバックされたら普通に戻れるけど今は放置で
?>
<div id="done_buying">
  <h1>購入が完了しました☆</h1>
  <ul>
    <li><img src="<?php echo $image1; ?>"></li>
    <li><img src="<?php echo $image2; ?>"></li>
    <li><img src="<?php echo $image3; ?>"></li>
  </ul>


  <form action="./index.php" method="post">
    <button name="lineup">TOPページへ</button>
    <button name="mypage">購入の確認</button>
    <!-- あとで出品者連絡画面に差し替えます -->
  </form>
</div>