
<?php
    $id = $_GET['pid'];
    $page = $_GET['page'];
    if(isset($_COOKIE['cart']))
    {
        $data = $_COOKIE['cart'];
        if(!strstr($data,$id))
        {
        $data= $data.",".$id;
        setcookie("cart",$data,time()+60*60*7*24);
        }
    }
    else
    {
        setcookie("cart",$id,time()+60*60*7*24);
    }
    if($page=="mobile")
        header("location:mobile_des.php?id=$id");
    else
        header("location:television_des.php?id=$id");
?>

    
