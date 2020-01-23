<?php
// この部分で確認画面からPOSTで商品IDを受け取り、
// dbの状態を購入済み状態に変更します。
?>
<div id="done_buying">
    <h1>購入が完了しました☆</h1>
    
    <form action="./index.php" method="post">
        <button name="lineup">TOPページへ</button>
        <button name="mypage">商品発送の手続きへ</button>
        <!-- あとで出品者連絡画面に差し替えます -->
    </form>
</div id="">