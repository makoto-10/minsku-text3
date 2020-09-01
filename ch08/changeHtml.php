<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<center>
			<?php if ($_POST['flag']==1){ //if文?>
			■管理者メニュー<br><br>
			<a href=""></a>ユーザー管理<br>
			<a href=""></a>商品在庫<br>
			<a href=""></a>在庫確認<br>
			<a href=""></a>売り上げ状況確認<br>
			<?php }else {    //else文?>
			■一般ユーザーメニュー<br><br>
			<a href=""></a>プロフィール管理<br>
			<a href=""></a>商品購入<br>
			<a href=""></a>購入履歴確認<br>
			<a href=""></a>問い合わせ<br>
			<?php }  //else文終了?>
			<a href="changeHtmlForm.php">ログアウト</a><br>
		</center>
	</body>
</html>

