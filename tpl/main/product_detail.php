<?php
// require_once('商品詳細情報');
require_once './func/function.php';
$product_title = 'なまはげ（男鹿Ver.）';
$intro = '秋田県の男鹿半島（男鹿市）、および、その基部（山本郡三種町・潟上市）の一部において見られる伝統的な民俗行事またはその行事を執り行う者の様相を指す。200年以上の歴史を有する。男鹿市などの調査によると、2012～2015年において市内148地区のうち約80地区でナマハゲ（なまはげ）行事がある[1]。「男鹿（おが）のナマハゲ」として、国の重要無形民俗文化財に指定されているほか、「来訪神：仮面・仮装の神々」の一つとしてユネスコの無形文化遺産に登録されている。異形の仮面をつけ、藁などで作った衣装をまとった「なまはげ」が、家々を巡って厄払いをしたり、怠け者を諭したりする。';
$user_name = 'せいやーさん';
$category1 = '衣服';
$category2 = ', 伝統';
$maker = 'タカラトミー';
$status = '目立った傷や汚れなし';
$how_send = '送料込み（出品者負担）';
$prefecture = '秋田県';
$sendday = '購入から1〜2日後';
$main_image = './images/materials/toys_boy.PNG';
$description_pre = '数年前にビアッジョブルーで定価7万円程で購入しました。

フォックスファーは一周していて、軽いのにとても華やかにさらっと羽織って頂けるコートです！
全体的に少しゆとりのあるラインで袖口も広めで、ゆるりとしたニットを着ても大丈夫かと思います。

※画像5枚目6枚目部分、左胸元に薄いシミが２つ見受けられます。
ブローチなどを付けるとわからないと思います。

サイズ：1  (S〜M相当)
カラー：ほぼオフホワイトに近い薄く明るいグレー
一番最後の画像が実物のカラーに近いです。


シミの部分以外は全体的にとても綺麗です。
使用後の商品とのことをご理解の上、ご購入をお願いします。



ユナイテッドアローズ、オンワード、ジルスチュアート、グレースコンチネンタル';
$value = 198000;
$tax = '税込';

// これらの情報はdbから引っ張る予定です。
// 実際は前のページから商品IDだけPOSTで受け取って、商品詳細テーブルの同一IDのデータ一件を拾ってきて表示します。
?>

<div id="details">
  <h1><?php echo $product_title; ?></h1>
  <form action="./index.php" method="post">
    <div id="intro" class="compose">
      <h2 id="intro"><?php echo $intro ?></h2>
    </div><!-- compose -->


    <div class="compose">

      <div id="image" class="column">
        <h2><img src="<?php echo $main_image; ?>"></h2>
        <ul>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
        </ul>
        <ul>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
          <li><img src="<?php echo $main_image; ?>"></li>
        </ul>
      </div><!-- image -->

      <div id="info" class="column">
        <ul>
          <li>出品者</li>
          <li><?php echo $user_name; ?></li>
        </ul>
        <ul>
          <li>カテゴリ</li>
          <li><?php echo $category1.','. $category2; ?></li>
        </ul>
        <ul>
          <li>メーカー</li>
          <li><?php echo $maker; ?></li>
        </ul>
        <ul>
          <li>商品の状態</li>
          <li><?php echo $status; ?></li>
        </ul>
        <ul>
          <li>配送料の負担</li>
          <li><?php echo $how_send; ?></li>
        </ul>
        <ul>
          <li>配送方法</li>
          <li>まさる堂らくらくパック</li>
        </ul>
        <ul>
          <li>配送元地域</li>
          <li><?php echo $prefecture; ?></li>
        </ul>
        <ul>
          <li>大まかな発送日</li>
          <li><?php echo $sendday; ?></li>
        </ul>
      </div><!-- column -->
    </div><!-- compose -->

    <div class="compose">
      <h1>&yen;<?php echo $value; ?>(<?php echo $tax; ?>)</h1>
      <input type="submit" value="購入画面に進む" id="submit" name="product_to_verification">
    </div><!-- compose -->
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