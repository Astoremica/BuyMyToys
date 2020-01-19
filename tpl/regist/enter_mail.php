<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>新規会員登録｜メール登録フォーム</title>
</head>

<body>
    <h1>メール登録画面</h1>

    <form action="./regist.php" method="post">

        <p>メールアドレス：<input type="text" name="regist_mail[mail]" size="50"></p>

        <input type="hidden" name="regist_mail[token]" value="<?php echo $token; ?>">
        <button type="submit">登録する</button>

    </form>
</body>

</html>