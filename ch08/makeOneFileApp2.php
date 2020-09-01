<?php
    //POSTデータが存在するか確認
    if (isset($_POST['number'])){
        $msg=$_POST['number']."の数字が好きなんですね！<br>\n";
    }else {
        $msg="【初めての入力ですね。】";
    }
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<form action="makeOneFileApp2.php" method="POST">
			あなたの好きな数字を入力してください。<br>
			<input type="text" name="number" value="">
			<input type="submit" value="入力">
		</form>
		<?=$msg?>
	</body>
</html>

