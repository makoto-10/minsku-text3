<?php
    //食べ物データ
    $foods=array("カレーライス","ラーメン","焼き肉","寿司","ハンバーグ");

    if (in_array($_POST['food'], $foods)){
        $msg="あなたの好きな「".$_POST['food']."」は、人気料理のTOP5に入っています。";
    }else{
        $msg="あなたの好きな「".$_POST['food']."」は、人気料理のTOP5に入っていません。";
    }
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?=$msg?>
	</body>
</html>

