<div id="exhibits">
  <h1>商品の出品</h1>
  <form action="./tpl/main/verification_upforSale.php" method="post">

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
        <select name="blood" size="1">
          <option value="">--</option>
          <option value="A">ホビー</option>
          <option value="B">知育玩具</option>
          <option value="C">戦隊ヒーロー</option>
          <option value="D">仮面ライダー</option>
          <option value="E">プリキュア</option>
          <option value="F">マイメロディー</option>
          <option value="G">きらりんレボリューション</option>
        </select>
        <p>商品の状態</p>
        <select name="blood" size="1">
          <option value="">--</option>
          <option value="A">非常に良い</option>
          <option value="B">目立った傷なし</option>
          <option value="C">実用に問題なし</option>
          <option value="D">実用に問題あり</option>
          <option value="E">ジャンク品</option>
        </select>
      </div><!-- column -->
    </div><!-- compose -->

    <div id="send" class="compose">
      <h2>配送について</h2>
      <div class="column">
        <p>配送量の負担</p>
        <select name="blood" size="1">
          <option value="">--</option>
          <option value="A">出品者</option>
          <option value="B">購入者</option>
        </select>
        <p>発送元の地域</p>
        <select name="blood" size="1">
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
        <p>商品価格<input type="text" value="100" name="p_price">円 + 手数料 (10%) + 配送料 (500円)</p>
        <p>合計価格 = <script> document.write(sumarry); </script>円</p>
      </div><!-- column -->
    </div><!-- compose -->

    <div class="compose">
      <ul>
        <li><input type="submit" value="確認画面へ" id="submit"></li<input>
        <li><input type="reset" value="やり直す" id="reset"></li>
      </ul>
    </div><!-- compose -->
  </form>
  </div><!-- exhibits -->
