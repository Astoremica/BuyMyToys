<!DOCTYPE html>
<html>

<head>
    <title>会員登録完了画面</title>
    <meta charset="utf-8">
</head>

<body>

    <?php if (count($errors) === 0) : ?>
        <h1>会員登録完了画面</h1>

        <p>登録完了いたしました。ログイン画面からどうぞ。</p>
        <p><a href="">ログイン画面（未リンク）</a></p>

    <?php elseif (count($errors) > 0) : ?>

        <?php foreach ($errors as $value) : ?>
            <p><?php echo $value; ?></p>
        <?php endforeach; ?>

    <?php endif; ?>

</body>

</html>