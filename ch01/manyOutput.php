<?php
	$name="神田ハナコ";    //名前の変数
	$height=154.6;   //身長の変数
	$age=26;   //年齢の変数
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		    echo "■PHPモードで出力。<br>\n";
		    echo $name.'さんの身長は'.$height."cmです。<br>";
		    echo "年齢は".$age."歳です。<br><br>\n";
		?>

		◆HTMLモードで出力1<br>
		<?php echo $name;?>さんの身長は<?php echo $height;?>cmです。<br>
		年齢は<?php echo $age;?>歳です。<br><br>

		●HTMLモードで出力2(ショートタグ使用)<br>
		<?=$name;?>さんの身長は<?=$height;?>cmです。<br>
		年齢は<?=$age;?>歳です。<br><br>
	</body>
</html>
