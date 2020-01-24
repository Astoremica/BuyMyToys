<div id="details">

  <h1><?php echo $product[0]; ?></h1>
  <h2><img src=<?php echo $product[1]; ?>></h2>

  <ul>
    <li>カテゴリ:<?php echo $product[2]; ?></li>
    <li>配送方法:まさる堂らくらくパック</li>
    <li>商品説明<br>
      <pre><?php echo $product[3]; ?><pre>
    </li>
    <li>&yen;<?php echo $product[4]; ?>(税込)</li>
  </ul>

  <form action="./index.php" method="post">
    <input type="hidden" value="<?php echo $product_id ?>" name="product_id">
    <input type="submit" value="購入画面に進む" id="submit" name="product_to_verification">
    <input type="submit" value="TOPに戻る" id="submit" name="lineup">
  </form>


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
</div>