<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("location:login.php");
}
?>
<?php

$msg = "Please Visit Here After Purchasing !!!";
$path = "neutral_emoji.png";
if (isset($_POST['shipped'])) {
    $name = $_POST['name'];
     $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'] ;
    $state = $_POST['state'] ;
    $country = $_POST['country'] ;
    $pincode = $_POST['pincode'] ;
    $payment = $_POST['payment'];
    $products_id = $_COOKIE['cart'];
    $amount = $_SESSION['amount'];
     $date = date("y-m-d");
    $adrs = $name.", Email : $email, Mobile : $mobile, $address, $state, $country, Pincode : $pincode.";
    

    $link = mysqli_connect("localhost", "root", "", "eshopdb");
    $qry = "insert into p_order(order_id, user_id, pid, order_date, amount, address, payment, status)"
            . " values( ' ',$_SESSION[uid], '$products_id', '$date', $amount, '$adrs', '$payment', 'Undelivered')";
    mysqli_query($link, $qry);
    if (mysqli_affected_rows($link) > 0) {
        setcookie('cart',"", time()-5);
        $msg = "<font color='green'>Order Successfully Placed !!!</font>";
        $path = "happy.gif";
    }
    else
    {
        $msg = "<font color='red'>Order Failed !!!</font>";
        $path = "sad.gif";
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Order</title>
<!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        
        
        <style>
        </style>
        
    </head>
    <body>
        
        <!--header-->
        <?php
        include("header.php");
        ?>

        <?php
        echo "<center><h2>$msg</h2></center>";
        echo "<center><img src='images/$path'/ width='250px' height='200px'> </center>";
        ?>
        
        <!--foooter-->
        <div class="row">
            <div class="col-sm-12" style='height:254px'></div>
        </div>
        
        <?php
        include ("footer.html");
        ?>
    </body>
</html>
