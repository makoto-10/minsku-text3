<?php
    $num=$_POST['number'];


    if($num%2==0){
        $msg=$num."は偶数です。<br>\n";
    }else {
        $msg=$num."は奇数です。<br>\n";
    }
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		好きな数値を入力してください！<br>
		<form action="practice0801.php" method="POST">
			<input type="text" name="number" value="">
			<input type="submit" value="送信">
		</form>
		<?=$msg?>
	</body>
</html>

