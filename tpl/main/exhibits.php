<?php

?>
<div id="exhibits">
  <h1>商品の出品</h1>
  <form action="./index.php" method="post" enctype="multipart/form-data">

  <div id="info" class="compose">
    <h2 id="image">商品画像を選択</h2>
      <input type="file" name="image1">
      <input type="file" name="image2">
      <input type="file" name="image3">
  </div><!-- compose -->

  <div id="info" class="compose">
    <h2 id="name">商品名</h2>
    <input type="text" value="りんごのパソコン" name="p_title">
  </div><!-- compose -->

  <div id="intro" class="compose">
    <h2>商品の説明</h2>
      <textarea rows="4" cols="40" name="p_description">ここに入力</textarea>
  </div><!-- compose -->

  <div id="info" class="compose">
      <h2>商品の詳細</h2>
      <div class="column">
        <p>カテゴリー</p>
        <select name="genle" size="1">
          <option value="">--</option>
          <option value="A">ホビー</option>
          <option value="B">知育玩具</option>
          <option value="C">戦隊ヒーロー</option>
          <option value="D">仮面ライダー</option>
          <option value="E">プリキュア</option>
          <option value="F">マイメロディー</option>
          <option value="G">きらりんレボリューション</option>
        </select>
      </div><!-- column -->
    </div><!-- compose -->

    <div id="send" class="compose">
      <h2>配送について</h2>
      <div class="column">
        <p>配送量の負担</p>
        <select name="send_payment" size="1">
          <option value="">--</option>
          <option value="A">出品者</option>
          <option value="B">購入者</option>
        </select>
        <p>発送元の地域</p>
        <select name="sending_point" size="1">
          <option value="">--</option>
          <option value="A">本州</option>
          <option value="B">四国</option>
          <option value="C">北海道</option>
          <option value="D">沖縄</option>
        </select>
      </div><!-- column -->
    </div><!-- compose -->

    <div id="value" class="compose">
      <h2>販売価格</h2>
      <div id="column">
        <p>商品価格<input type="text" value="100" name="p_price">円</p>
        <p>※ 手数料 (10%) + 配送料 (500円) が 加算されます</p>
      </div><!-- column -->
    </div><!-- compose -->

    <div class="compose">
        <input type="submit" value="確認画面へ" id="submit" name="exhibits_to_verification">
        <input type="reset" value="やり直す" id="reset">
    </div><!-- compose -->
  </form>
  </div><!-- exhibits -->
