<?php
    //引数に２つの数値と計算式を受け取り、計算式に応じた
    //計算結果を戻り値として返します。
    function calc($num1,$num2,$operator){
        if ($operator=="+"){
            return $num1+$num2;
        }elseif ($operator=="-"){
            return $num1-$num2;
        }elseif ($operator=="*"){
            return $num1*$num2;
        }elseif ($operator=="/"){
            return $num1/$num2;
        }else {
            return $num1%$num2;
        }
    }
?>