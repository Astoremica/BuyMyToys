<!DOCTYPE html>
<html>

<head>
    <title>入力確認画面</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>会員登録確認画面</h1>

    <?php if (count($errors) === 0) : ?>


        <form action="./regist.php" method="post">

            <p>氏名：<?php echo  $member_name; ?></p>
            <p>ニックネーム：<?php echo  $member_nickname; ?></p>
            <p>性別：<?php echo  $member_gender; ?></p>
            <p>メールアドレス：<?php echo  $_SESSION['mail']; ?></p>
            <p>メンバーID：<?php echo  $member_id; ?></p>
            <p>パスワード：<?php echo  $password_hide; ?></p>
            <p>電話番号：<?php echo  $member_tel; ?></p>
            <p>生年月日：<?php echo  $member_birthday; ?></p>
            
            <input type="button" value="戻る" onClick="history.back()">
            <input type="hidden" name="add_member[token]" value="<?php echo $token; ?>">
            <button type="submit" name="add_member[regist]">登録する</button>

        </form>

    <?php elseif (count($errors) > 0) : ?>

        <?php foreach ($errors as $value) : ?>
            <p><?php echo $value; ?></p>
        <?php endforeach; ?>

        <input type="button" value="戻る" onClick="history.back()">

    <?php endif; ?>

</body>

</html>