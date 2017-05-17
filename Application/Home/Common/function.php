<?php
function checklength($str,$min,$max){
    $len = strlen($str);
    if($len>$max || $len<$min){
        return false;
    }else{
        return true;
    }
}