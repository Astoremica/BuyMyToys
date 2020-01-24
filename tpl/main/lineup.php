<div id="main">
  <!-- データ内容表示 -->
  <?php foreach ($products as $reco) : ?>
  <div class="product">
      <a href="<?php echo BASE_URL ?>index.php?product_detail=<?php echo $reco['id']; ?>">
        <img src="<?php echo $reco['img']; ?>" alt="商品"><img>
        <span class="product_title"><?php echo $reco['title'] ?></span>
          <div class="price_fav">
            <span class="price">&yen;<?php echo $reco['price']; ?></span>
          <img id="favo_icon" src="./images/materials/favorite_icon.png" alt="ハート">
        </div>
      </a>
    </div>
    <?php endforeach; ?>
</div>