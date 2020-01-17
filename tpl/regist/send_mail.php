<!DOCTYPE html>
<html>

<head>
    <title>メール確認画面</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>メール確認画面</h1>

    <?php if (count($errors) === 0) : ?>

        <p><?php echo $message; ?></p>

        <p>↓このURLが記載されたメールが届きます。</p>
        <a href="<?php echo $url; ?>"><?php echo $url; ?></a>

    <?php elseif (count($errors) > 0) : ?>

        <?php foreach ($errors as $value) : ?>
            <p><?php echo $value; ?></p>
        <?php endforeach; ?>

        <input type = "button" value="戻る" onClick="history.back()">

    <?php endif; ?>
</body>

</html>