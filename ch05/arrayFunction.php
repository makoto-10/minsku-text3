<?php
    $keys=array('国語','数学','理科','社会','英語');

    //連想配列の作成
    $data=array_fill_keys($keys,100);

    //作成した連想配列の要素数を取得
    $count=count($data);
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		array_fill_keysで取得した要素の総数は「<?=$count?>」です。<br><br>
		<?php
		    foreach ($data as $key=>$val){
		    echo $key."の最高点は".$val."です。<br>\n";
		}
		?>
	</body>
</html>

