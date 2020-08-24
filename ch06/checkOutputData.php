<?php
    //フォームからの入力データを取得
    $name=htmlentities($_POST['name'],ENT_QUOTES,'UTF-8');
    $age=htmlentities($_POST['age'],ENT_QUOTES,'UTF-8');
    $msg="";

    //名前が空かどうかチェック
    if (empty($name)&&strlen($name)==0){
        $msg="お名前を入力してください。<br>\n";
    }

    //年齢が空かどうかチェック
    if (empty($age)&&strlen($age)==0){
        $msg.="年齢を入力してください。<br>\n";
    }else if(!is_numeric($age)){
        //年齢が数値なのかチェック
        $msg.="年齢は数値で入力してください。<br>\n";
    }

    //エラーがあったのか確認
    if($msg==""){
        $msg=$name."さんは".$age."歳なんですね。<br>\n";
    }

?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?=$msg?><br>
		<a href="checkForm2.php">入力画面に戻る</a>
	</body>
</html>

