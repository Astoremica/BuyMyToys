<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reset.css">
    <!-- 左上に戻るがあるヘッダー用スタイル -->
    <link rel="stylesheet" href="./css/back_header_style.css">
    <link rel="stylesheet" href="./css/favo_style.css">
    <title>Buy My Toys | おねだりリスト</title>
</head>

<body>
    <header>
        <h1> おねだりリスト</h1>
        <p id="back_button"><a href="#" onclick="history.back(); return false;"><img src="./images/materials/back_arrow.png" alt="戻る"></a></p>
    </header>
    <div id="fovo_info">
        <p>おねだりするものにチェックをいれよう</p>
        <form action="./index.php" method="post">
            <?php if (is_array($favorites)) : ?>
                <?php $i = 0; ?>
                <ul class="favo_list">
                    <?php foreach ($favorites as $reco) : ?>
                        <?php if (is_array($reco)) : ?>
                            <li>
                                <input type="radio" name="add_fovo" id="favo_radio" value="<?php echo $i; ?>">
                                <?php foreach ($reco as $value) : ?>
                                    <?php echo $value; ?>
                                <?php endforeach; ?>
                            </li>
                            <?php $i++; ?>
                        <?php else : ?>
                            <li>
                                <input type="radio" name="add_fovo" id="favo_radio" value="<?php echo $i; ?>">
                                <?php echo $roco; ?>

                            </li>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <ul id="favo_list">
                    <li>
                        <input type="radio" name="add_fovo" id="favo_radio" value="0">
                        <?php echo $favorites; ?>
                    </li>
                </ul>
            <?php endif; ?>
            <!-- 親 -->
            <p>だれにおねだりする？</p>
            <?php if (is_array($paremts)) : ?>
                <ul class="palents_list">
                    <?php foreach ($paremts as $reco) : ?>
                        <li>
                            <input type="radio" name="parent" id="favo_radio" value="<?php echo $reco['parentemail']; ?>">
                            <span><?php echo $reco['parent_name']; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <ul id="palents_list">
                    <li>
                        <input type="radio" name="parent" id="favo_radio" value="<?php echo $reco['parentemail']; ?>">
                        <?php echo $paremts; ?>
                    </li>
                </ul>
            <?php endif; ?>
            <button type="submit" value="<?php echo $member_id; ?>" name="go_parents">おねだりする</button>
        </form>
    </div>
</body>

</html>