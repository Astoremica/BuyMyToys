<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 格納したタイトル -->
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/logo.PNG">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <script src="../../jquery-3.4.1.min.js"></script>
</head>

<body>
    <header>
        <div class="web_header_top">
            <h1 class="logo">
                <a href="">
                    <img src="./images/materials/toys_boy.PNG" alt="" width="">
                </a>
            </h1>

            <div id="search_area">

                <form action="./index.php">
                    <ul>
                        <li class="search">
                            <input type="text" name="search" placeholder="新しいおもちゃを見つけよう！" id="search">
                        </li>
                        <li class="search_btn">
                            <button type="submit" name="btn">
                                <li class="fas fa-search"></li>
                            </button>
                        </li>
                    </ul>
                </form>

            </div>
            <!-- search_area -->

        </div>
        <!-- web_header_top -->


        <div class="web_header_bottom">

            <ul id="category">
                <li><a href="">カテゴリーから探す</a></li>
                <li><a href="">メーカーから探す</a></li>
                <li><form action="./index.php" method="post"><button name="want">欲しがってます！</button></form></li>
            </ul>

            <form action="./index.php" method="post">
                <ul id="member_nav">
                    <li><button class="login_btn" name="mypage">マイページ</button></li>
                    <li><button class="new_btn" name="sing_in">会員登録</button></li>
                    <li><button class="login_btn" name="log_in">ログイン</button></li>
                </ul>
            </form>

        </div>
        <!-- web_header_bottom -->
    </header>