<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		//ファイルオープン
		$fp=fopen("sample.txt","r");

		echo fgets($fp)."<br>\n";   //1行読み出し1回目(1行目)
		echo fgets($fp)."<br>\n";   //1行読み出し2回目(2行目)

		//ファイルクローズ
		fclose($fp);
		?>
	</body>
</html>

