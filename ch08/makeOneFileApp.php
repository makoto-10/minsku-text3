<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<form action="makeOneFileApp.php" method="POST">
			あなたの好きな数字を入力してください。<br>
			<input type="text" name="number" value="">
			<input type="submit" value="入力">
		</form>
		<?php echo $_POST['number']."の数字が好きなんですね！<br>\n";?><br>
	</body>
</html>

