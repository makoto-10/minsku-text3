<?php
function calcTriangle($base,$height){
    return $area=$base*$height/2;
}

function calcSum($numbers){

}

function scoreCheck($score){
    if ($score>=0&&$score<=59){
        echo "「かなり努力が必要です！」<br>";
    }elseif ($score>=60&&$score<=69){
        echo "「もっと頑張りましょう！」<br>";
    }elseif ($score>=70&&$score<=79){
        echo "「頑張りましょう！」<br>";
    }elseif ($score>=80&&$score<=89){
        echo "「良くできました！」<br>";
    }elseif ($score>=90&&$score<=100){
        echo "「大変良くできました！」<br>";
    }else {
        echo "「0～100の数字で入力してください！」";
    }
}


?>