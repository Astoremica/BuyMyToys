<?php
$user_name = "岡本倫太郎";
$user_good = 14;
$user_exhibits = 16;
?>
<div id="mypage">


  <div id="side_bar">
    <ul class="mypage_flex"><!--マイページナビ-->
      <li><a href="#">マイページ</a></li>
      <li><a href="#">お知らせ</a></li>
      <li><a href="#">やることリスト</a></li>
      <li><a href="#">いいね一覧</a></li>
      <li><a href="#">出品する</a></li>
      <li><a href="#">出品した商品一覧</a></li>
      <li><a href="#">購入した商品一覧</a></li>
      <li><a href="#">ニュース一覧</a></li>
      <li><a href="#">評価一覧</a></li>
      <li><a href="#">ガイド</a></li>
      <li><a href="#">お問い合わせ</a></li>
    </ul><!--マイページナビ-->

    <p>設定</p>
    <ul class="mypage_flex"><!--設定-->
      <li><a href="#">プロフィール</a></li>
      <li><a href="#">発送先・住所設定</a></li>
      <li><a href="#">支払い方法</a></li>
      <li><a href="#">メール/パスワード</a></li>
      <li><a href="#">本人情報</a></li>
      <li><a href="#">電話番号の確認</a></li>
      <li><a href="#">ログアウト</a></li>
    </ul><!--設定-->
  </div><!-- side_bar -->









  <div id="user_menu">
    <div id="about_myinfo">
      <h2><?php echo($user_name); ?></h2>
      <p>評価数：<?php echo($user_good); ?></p>
      <p>出品数：<?php echo($user_exhibits); ?></p>
    </div><!-- about_myinfo -->

    <ul>
      <li>お知らせ</li>
      <li>やることリスト</li>
    </ul>

    <?php
    // require_once('mypage_news.php');
    ?>

    <!------- あとでphpに置き換えます ------->
    <!------- ユーザー別お知らせの一覧表示機能 ------->
    <ul class="list_view">
      <li>事務局から個別メッセージ</li>
      <li>（今日まで！）勝手出品するだけで2000円分相当のポイントが必ずもらえる！</li>
      <li>事務局から個別メッセージ</li>
      <li>事務局から個別メッセージ</li>
      <li>友達・家族を招待すると必ず1000円分の商品プレゼント！</li>
      <li>
        <form>
          <input type="submit" value="一覧を見る">
        </form>
      </li>
    </ul>

    <!------- ユーザー別お知らせの一覧表示機能 ------->

    <h3>購入した商品</h3>
    <ul class="mypage_flex">
      <li>取引中</li>
      <li>過去の取引</li>
    </ul>

    <ul class="list_view">
      <li>事務局から個別メッセージ</li>
      <li>（今日まで！）勝手出品するだけで2000円分相当のポイントが必ずもらえる！</li>
      <li>事務局から個別メッセージ</li>
      <li>事務局から個別メッセージ</li>
      <li>友達・家族を招待すると必ず1000円分の商品プレゼント！</li>
      <li>
      <form>
        <input type="submit" value="一覧を見る">
      </form>
      </li>
    </ul>
  </div><!-- user_menu -->
</div><!--mypage-->