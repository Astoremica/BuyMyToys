<div id="mypage">
  <div id="profile_area">
    <p id="profile_image"><img src="./images/user_icon/no_<?php echo $user_data['member_key']; ?>/user_profile.jpg"></p>
    <p id="user_name"><?php echo $user_data['member_name']; ?></p>
    <form action="./index.php" method="post">
      <button type="submit" name="address_setting" value="<?php echo $user_data['member_key']; ?>">住所設定</button>
      <button type="submit" name="bank_setting">銀行口座設定</button>
      <button type="submit" name="logout">ログアウト</button>
    </form>
  </div>
</div>