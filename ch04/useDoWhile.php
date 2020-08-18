<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  $i=1;
		  do {
		      echo $i."回目のdo-whileループです。<br>\n";
		      $i++;
		  }while ($i<=3);
		  echo "-------------------------------<br>\n";
		  echo '$iは最終的に「'.$i."」になって、ループ処理から抜けしました。";
		?>
	</body>
</html>
