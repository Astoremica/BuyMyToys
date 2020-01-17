<div id="exhibits">
  <h1>商品の情報を入力</h1>
  <form>
    <div id="info" class="compose">
      <h2 id="image">出品画像</h2>
      <input type="file">
    </div><!-- compose -->

    <div id="info" class="compose">
      <h2 id="name">商品名</h2>
      <input type="text">
    </div><!-- compose -->

    <div id="intro" class="compose">
      <h2>商品の説明</h2>
      <textarea name="request" rows="4" cols="40" value="ここに入力">
        </textarea>
    </div><!-- compose -->

    <div id="info" class="compose">
      <h2>商品の詳細</h2>

      <div class="column">
        <p>カテゴリー</p>
        <select name="blood" size="1">
          <option value="A">--</option>
          <option value="B">B型</option>
          <option value="O">O型</option>
          <option value="AB">AB型</option>
        </select>

        <p>商品の状態</p>
        <select name="blood" size="1">
          <option value="A">--</option>
          <option value="B">B型</option>
          <option value="O">O型</option>
          <option value="AB">AB型</option>
        </select>
      </div><!-- column -->
    </div><!-- compose -->

    <div id="send" class="compose">
      <h2>配送について</h2>

      <div class="column">
        <p>配送量の負担</p>
        <select name="blood" size="1">
          <option value="A">--</option>
          <option value="B">B型</option>
          <option value="O">O型</option>
          <option value="AB">AB型</option>
        </select>

        <p>発送元の地域</p>
        <select name="blood" size="1">
          <option value="A">--</option>
          <option value="B">B型</option>
          <option value="O">O型</option>
          <option value="AB">AB型</option>
        </select>

        <p>発送までの日数</p>
        <select name="blood" size="1">
          <option value="A">--</option>
          <option value="B">B型</option>
          <option value="O">O型</option>
          <option value="AB">AB型</option>
        </select>
      </div><!-- column -->
    </div><!-- compose -->

    <div id="value" class="compose">
      <h2>販売価格</h2>

      <div class="column">
        <p>価格</p><input type="text">
        <p>販売手数料</p><input type="text" value="10%">
        <p>販売利益</p><input type="text">
      </div><!-- column -->

    </div><!-- compose -->

    <div class="compose">
      <ul>
        <li>
          <input type="submit" value="出品する" id="submit">
        </li>
        <li>
          <input type="reset" value="やり直す" id="reset">
        </li>
      </ul>
    </div><!-- compose -->
  </form>
</div>