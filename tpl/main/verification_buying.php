<?php
// データの改ざん防止も兼ねて、前のページ(product_detail)から引き継ぐものは商品IDのみで、前のページと同じように商品情報を表示します。
// あくまでも購入者が購入する商品を二回確認できるようにするための機能で、それ以上の意味はありません。

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
$product_image1 = './images/upload/image1.jpg';
$product_image2 = './images/upload/image2.jpg';
$product_image3 = './images/upload/image3.jpg';
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
$product_value = 198000;
$tax = '税込';

?>
<div id="verification_buying">
    <h1>購入の確認</h1>
    <p><?php echo $product_title; ?></p>
    <ul>
        <li><img src="<?php echo $product_image1; ?>"></li>
        <li><img src="<?php echo $product_image2; ?>"></li>
        <li><img src="<?php echo $product_image3; ?>"></li>
    </ul>
    <p>価格：¥<?php echo $product_value; ?>円</p>
    <form action="./index.php" method="post">
        <input type="submit" name="verification_to_done_buying" value="購入する">
    </<form>
</div>
