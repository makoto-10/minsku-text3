ch03
<?php
if ($gender=="男性"){
    if ($age>=18){
        $msg=$gender."の".$age."歳は、結婚ができる年齢ですね。";
    }else {
        $msg=$gender."の".$age."歳は、まだ結婚ができない年齢ですね。";
    }
}else {
    if ($age>=16){
        $msg=$gender."の".$age."歳は、結婚ができる年齢ですね。";
    }else {
        $msg=$gender."の".$age."歳は、まだ結婚ができない年齢ですね。";
    }
}

switch ($grade){
    case 1:
        $msg="もっと頑張りましょう!";
        break;
    case 2:
        $msg="もう少し努力が必要です。";
        break;
    case 3:
        $msg="さらに良い成績を目指しましょう。";
        break;
    case 4:
        $msg="良い成績です。";
        break;
    case 5:
        $msg="最高の成績です。";
        break;
    default :
        $msg="1～5の数値を入力してください！";
        break;
}
?>

ch04
<?php
×　○　×　×　○

while($i<11){

}


?>