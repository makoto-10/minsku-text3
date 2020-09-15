<?php
    //データが存在するか確認
    if (isset($_POST['number'])){
        $num=$_POST['number'];
        $msg=$num."の数字が好きなんですね！<br>\n";
        $count=$_POST['count']+1;
    }else {
        $num="";
        $msg="【初めての入力ですね。】<br>\n";
        $count=1;
    }
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		■<?=$count?>回目の入力<br>
		<form action="makeOneFileApp3.php" method="POST">
			あなたの好きな数字を入力してください。<br>
			<input type="text" name="number" value="<?=$num?>">
			<input type="hidden" name="count" value="<?=$count?>">
			<input type="submit" value="入力">
		</form>
		<?=$msg?>
	</body>
</html>

