<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQ</title>
        <!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->

    </head>
    <body>
        <div class="container-fluid">
        <?php
        include './Header.php';
        ?>
        
        <div class="row" style="">
            <div class="col-sm-1" style="">
            </div>
        
            <div class="col-sm-5" style=" padding-top: 20px;">
                <dl>
                    <dt><h5><b>&#9673; How I Can Check My Order Status ? </b></h5></dt>
                    <dd>&nbsp; &#9658; You can check the status of your order by clicking <b>"MY Order"</b> from<b> "My Account"</b>.</dd><br>
                    
                    <dt><h5><b>&#9673;  Delivery was attempted but I was unavailable, What next ?</b></h5></dt>
                    <dd>&nbsp; &#9658; Don't Worry, Our courier will try to attempt to deliver your order over next 2 days. In case you're unable to respond calls, can submit your delivery preference on<b> "My Orders" </b> option. </dd><br>
                    
                    <dt><h5><b>&#9673;  My transaction failed but the money is deducted from my account. What should I do ?</b></h5></dt>
                    <dd>&nbsp; &#9658; Don't worry, it will be reversed instantly. You can check your account balance to confirm .</dd><br>
                    
                    <dt><h5><b>&#9673;  Can I cancel part of my order ?</b></h5></dt>
                    <dd>&nbsp; &#9658; Yes, if you placed an order with many item, you can cancel delivery for each them. But if it part of a combo or clubbed with another item, the entire set /combo will be cancelled .</dd>
                    <dd>Go to <b>"My Order"</b> and tap on order you wish to cancel. Click on <b> Cancel</b> button. Cancellation is not allowed if the order has shipped .</dd><br>
                    
                    <dt><h5><b>&#9673;  I have recieved a Call, claiming to offer reward/lucky draw prizes.</b></h5></dt>
                    <dd><b>Beware :</b> We never request our customer for unsolicited financial information or advance payment in exchange of reward. All our offer are available <b>only</b> on our website and app . <br> Please <b>Do Not</b> respond to any Phone Call/Email/SMS claiming to offer reward/lucky draw prizes on behalf of EasyDay . </dd><br>
               
                </dl>
            </div>
            
            <div class="col-sm-5" style=" padding-top: 20px;">
                <dl>
                    
                    <dt><h5><b>&#9673;  Can I open and check the contents of my package before accepting delivery ?</b></h5></dt>
                    <dd>&nbsp; &#9658; Currently, this option is not available .</dd><br>
                    
                    <dt><h5><b>&#9673; How Can I return/replace an item ?</b></h5></dt>
                    <dd>&nbsp; &#9658; Our courier partner will pick it up from your place. Do keep the product tag and packaging intact. You can return/replace an item within 7 days of delivery .</dd><br>
                    
                    <dt><h5><b>&#9673;  How can I cancel my order ?</b></h5></dt>
                    <dd>&nbsp; &#9658; Go to <b> "My Order" </b>and tap on order you wish to cancel. Click on <b>Cancel</b> button. Cancellation is not allowed if the order has shipped .</dd><br>
                    
                    <dt><h5><b>&#9673;  I have recieved a message asking for money ?</b></h5></dt>
                    <dd>&nbsp; &#9658; <b>Beware : </b>We never request our customer for unsolicited financial information or advance payment in exchange of reward. All our offer are available <b>only</b> on our website and app . <br> Please <b>Do Not</b> respond to any Phone Call/Email/SMS claiming to offer reward/lucky draw prizes on behalf of EasyDay . </dd><br>
                    
                </dl>
            </div>
                
            <div class="col-sm-1" style="">
            </div>
        </div>
        
        <?php
        include './Footer.html';
        ?>
            </div>
    </body>
</html>
