<?php
session_start();
$pid = $_GET['pid'];
$oid = $_GET['oid'];

if (isset($_SESSION['uid'])) {
    $link = mysqli_connect("localhost", "root", "", "eshopdb");
    $qry = "select * from p_order where order_id=$oid";
    $result = mysqli_query($link, $qry);
    if (mysqli_num_rows($result) > 0) {
        $arr = mysqli_fetch_array($result);
        $ar = explode(",", $arr[2]);
        $len = count($ar);
        for($i=0;$i<$len;$i++)
        {
            if($ar[$i]==$pid){
                unset ($ar[$i]);
            }
        }
        $a= implode(",", $ar);
        if($a){
            $updt = "UPDATE p_order SET pid ='$a' WHERE myorder.order_id = $oid";
            mysqli_query($link, $updt);
        }
        else{
             $updt = "DELETE from p_order WHERE p_order.order_id = $oid";
            mysqli_query($link, $updt);
            
        }
    }
    
    mysqli_close($link);
}
header("location:p_home.php");
?>

