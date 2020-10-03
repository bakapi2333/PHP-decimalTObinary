<?php

$int=$_POST['mingzi'];
function test ($var){

    $func=function($i){
        if($i < 2){
            return $i;
        }
        $return['_POST']=intval( $i / 2 );
        $return['remain']=$i%2;
        return $return;
    };
    $arr=array();
    while ($var >1){
        $result =$func($var);
        $var=$result['_POST'];
        array_unshift($arr,$result['remain']);
    }
    $var && array_unshift($arr,$var);
    return implode('',$arr);
}
echo "您输入的十进制数字:";
echo $_POST['mingzi'];
echo "<br>二进制结果为:";
echo test($int)."\r\n";
?>




