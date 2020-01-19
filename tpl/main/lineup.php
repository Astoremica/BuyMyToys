<section id="campaign">
  <article>キャンペーン情報</article>
</section>

<main>
  <div class="goods_header">
    <h1>新着商品</h1>
    <a href="" class="more_btn">もっと見る＞</a>
  </div>

  <!-- データ内容表示 -->
  <section class="goods">
    <?php foreach ($row as $reco) : ?>
        <article>
          <form action="./index.php" method="post">
          <button name="product_detail">
            <h2><img src="<?php echo $reco['img']; ?>" alt="商品"></h2>
            <p class="price">￥<?php echo $reco['price']; ?></p>
            <p class="about">
              <?php echo $reco['intro']; ?>
            </p>
          </button>
        </form>
        </article>
    <?php endforeach; ?>
  </section><!-- goods -->
</main>