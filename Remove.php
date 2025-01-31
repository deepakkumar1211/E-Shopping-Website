<?php
    $id=$_GET['pid'];
    $data = $_COOKIE['cart'];
    $arr = explode(",", $data);
    $arr1=array();
//    $str = "";
    $i=0;
    
    foreach($arr as $v)
    {
        if($v != $id){
        $arr1[$i]=$v;
        $i++;
    }
    }
    $str = implode(",", $arr1);
    setcookie("cart",$str,time()+60*60*24*7);
    header("location:mycart.php");
?>