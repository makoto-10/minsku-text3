<?php
    define('PI',3.14);  //定数で円周率を設定

    $radius=$_POST['radius'];   //入力データを取得する

    $area=$radius*$radius*PI;   //円の面積を求める
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		半径「<?=$radius?>」の円の面積は「<?=$area?>」です。
	</body>
</html>
