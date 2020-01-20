<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ホーム画面に追加時アドレスバー非表示 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="./css/reset.css">
    <!-- 会員登録時CSS -->
    <link rel="stylesheet" href="./css/regist_style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,500,900&amp;subset=japanese" rel="stylesheet">
    <link href="./images/materials/toys_boy_white.png">
    <title>新規会員登録｜メール登録フォーム</title>
</head>

<body>
    <header>
        <h1>会員登録</h1>
        <p id="back_button"><a href="#" onclick="history.back(); return false;"><img src="./images/materials/back_arrow.png" alt="戻る"></a></p>
    </header>

    <form id="enter_email_form" action="./regist.php" method="post">

        <input type="text" name="regist_mail[mail]" size="50" placeholder="メールアドレス">

        <input type="hidden" name="regist_mail[token]" value="<?php echo $token; ?>">
        <button type="submit">送信</button>

    </form>
</body>

</html>