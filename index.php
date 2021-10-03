<?php
var_dump($_POST);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="ja">
    <title>箕1掲示板</title>    
<body style="background: url(https://www.graphic.jp/files/img/options/rgb/rgb_data_submission/img_feature.jpg) fixed;">
    <center>
        <h1>1-1グループチャット</h1>
    <form method="post">
	<div>
        <h3><label for="view_name">名前</label></h3>
		<input id="view_name" type="text" name="view_name" value="">
	</div>
	<div>
        <h3><label for="message">本文</label></h3>
		<textarea id="message" name="message"></textarea>
	</div>
	<input type="submit" name="btn_submit" value="書き込む">
</form>
    </center>
</body>
</html>
