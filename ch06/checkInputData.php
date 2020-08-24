<?php
    //フォームからの入力データを取得
    $name=$_POST['name'];
    $age=$_POST['age'];
    $message="";

    //名前が空かどうかチェック
    if (empty($name)&&strlen($name)==0){
        $message="お名前を入力してください。<br>\n";
    }

    //年齢が空かどうかチェック
    if (empty($age)&&strlen($age)==0){
        $message.="年齢を入力してください。<br>\n";
    }else if(!is_numeric($age)){
        //年齢が数値なのかチェック
        $message.="年齢は数値で入力してください。<br>\n";
    }

    //エラーがあったのか確認
    if($message==""){
        $message=$name."さんは".$age."歳なんですね。<br>\n";
    }

?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?=$message?><br>
		<a href="checkForm1.php">入力画面に戻る</a>
	</body>
</html>

