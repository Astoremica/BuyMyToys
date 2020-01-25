<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ホーム画面に追加時アドレスバー非表示 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- ホーム画面に表示されるアプリ名 -->
    <meta name="apple-mobile-web-app-title" content="Buy My Toys">
    <!-- ホーム画面に表示されるアプリアイコン -->
    <link rel="apple-touch-icon" sizes="180x180" href="./images/materials/toys_boy_icon.png">
    <link rel="stylesheet" href="./css/reset.css">

    <!-- 商品詳細画面での画像のサイズを横幅いっぱいの正方形に -->
    <link rel="stylesheet" href="./css/buying_style.css">
    <!-- ログイン時のヘッダーCSS -->
    <link rel="stylesheet" href="./css/login_header_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Buy By Toys | 出品</title>
</head>

<body>
    <header>
        <nav>
            <a href="<?php echo BASE_URL; ?>index.php?mypage=''" id="mypage_icon"><img src="./images/user_icon/no_4/user_profile.jpg"></a>
            <h1 id="page_top">
                <a href="./index.php">
                    <img src="./images/materials/toys_boy_white.png" alt="Buy My Toys">
                </a>
            </h1>
            <p id="search_icon"><a href="<?php echo BASE_URL; ?>index.php"><img src="./images/materials/search.png" alt="商品検索"></a></p>
        </nav>
        <div id="system_list">
            <form action="./index.php" method="get">
                <button type="submit" id="home_icon"><img src="./images/materials/home_icon.png"></button>
                <button type="submit" id="camera_icon" name="exhibits_button" value="aaa"><img src="./images/materials/camera_icon.png"></button>
                <button type="submit" id="favorite_icon"><img src="./images/materials/favorite_white_icon.png"></button>
                <button type="submit" id="cart_icon"><img src="./images/materials/cart_icon.png"></button>
            </form>
        </div>
    </header>
    <div id="exhibits">
        <h1>商品の出品</h1>
        <form action="./index.php" method="post" enctype="multipart/form-data">

            <h2>商品画像を選択</h2>
            <input type="file" name="image1">
            <input type="file" name="image2">
            <input type="file" name="image3">

            <h2>商品名</h2>
            <input type="text" value="プラレール" name="name">

            <h2>商品の説明</h2>
            <textarea rows="4" cols="40" name="description">
息子が幼稚園の時遊んでいたおもちゃです。
キズ、ヨゴレ等あります。
      </textarea>

            <h2>商品の詳細</h2>
            <p>カテゴリー</p>
            <select name="category" size="1">
                <option value="B01">男児キャラクター</option>
                <option value="B01">ミニカー</option>
                <option value="B01">レールトイ</option>
                <option value="B01">トイホビー</option>
                <option value="B01">その他男児玩具関連</option>
                <option value="D31">ぬいぐるみ</option>
                <option value="D32">人形</option>
                <option value="D41">スケールプラモデル</option>
                <option value="D42">キャラクタープラモデル</option>
                <option value="D43">ホビーラジコン</option>
                <option value="D44">鉄道模型</option>
                <option value="D45">ガン</option>
                <option value="D46">クラフトホビー</option>
                <option value="D47">ホビー関連用品</option>
                <option value="D48">その他ホビー</option>
                <option value="G11">きせかえ</option>
                <option value="G12">おままごと</option>
                <option value="G13">女児ホビー</option>
                <option value="G14">女児コレクション</option>
                <option value="G15">女児キャラクター</option>
                <option value="G16">ライフ・ファッション</option>
                <option value="G17">トイドール</option>
                <option value="G18">その他女児玩具関連</option>
                <option value="K21">アクショントイ</option>
                <option value="K22">プレスクール</option>
                <option value="K23">ベビー</option>
                <option value="K24">乗用</option>
                <option value="K25">音楽</option>
                <option value="K26">幼児キャラクター</option>
                <option value="K27">ブロック</option>
                <option value="K28">木製玩具及び積木</option>
                <option value="K29">書籍</option>
                <option value="K30">遊具</option>
                <option value="S51">花火</option>
                <option value="S52">節句</option>
                <option value="S53">夏物</option>
                <option value="S54">小物玩具</option>
                <option value="S55">スポーツ</option>
            </select>

            <h2>配送方法：まさる堂らくらくパック</h2>

            <h2>販売価格</h2>
            <p>商品価格<input type="text" value="100" name="price">円</p>
            <p>※ 手数料 (10%) + 配送料 (500円) が 加算されます</p>

            <button type="submit" value="" name="exhibits_to_verification">かくにんする</button>
            <button type="reset" value="" name="lineup">やめておく</button>
        </form>
    </div>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- その他の手書きjs -->
    <script src="./js/others.js"></script>
</body>

</html>