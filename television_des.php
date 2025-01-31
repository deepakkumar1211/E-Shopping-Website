<?php
session_start();
//if(!isset($_SESSION['uname']))
//{
//    header("location:login.php");
//}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Television Description</title>
    </head>
    
    
    <body>
        <?php
        include './Header.php';
        ?>
        
        <div class="row" style="padding: 40px">
            <!--<div class="col-sm-4"></div>-->
            <!--<div class="col-sm-4">-->
                <?php
                    $product_id = $_GET['id'];
                    $link = mysqli_connect("localhost", "root", "", "eshopdb");
                    $result = mysqli_query($link, "select * from tv_specification where pid='$product_id' ");
                    $res =  mysqli_query($link, "select * from productmaster where pid = '$product_id' ") ;
                    $arr = mysqli_fetch_array($result);
                    $ar = mysqli_fetch_array($res);
                    
                    echo "<div class='row'><div class='col-sm-2'></div><div class='col-sm-4' style='text-align:center'><img src='./$ar[4]' alt='image'/></div>";
                    echo "<div class='col-sm-4  style='text-align:center'>";
                            echo "<div class='row'>";
                                    echo "<div class='col-sm-12'>";
                                    echo "<br><br><br><b>$ar[1]</b>";
                                    echo "</div>";
                            echo "</div><br>";
                            echo "<div class='row'>";
                                    echo "<div class='col-sm-12'>";
                                    echo "<b>Price : $ar[2]</b>";
                                    echo "</div>";
                            echo "</div><br>";
                            echo "<div class='row'>";
                                    echo "<div class='col-sm-12'>";
                                    echo "<a href='addcart.php?pid=$ar[0] & page=television ' class='btn btn-success'>Add To Cart</a>";
                                    echo "</div>";
                            echo "</div>";
                    echo "</div>";
                    echo "<div class='col-sm-2'></div>";
                    echo "</div>";
                    echo "<br><br><br>";
                    
 /*               ?>
                
                
            <!--</div>-->
        <!--</div>-->
        
        <?php   */

echo "<div class='row'>";

 echo "<div class='col-sm-2' ></div>";

            echo "<div class='col-sm-8' >";
            echo "<div class='table table-responsive'>";
            echo "<table class='table table-hovered'  cellspacing='2%'>";
            echo "<tr><th>In The Box</th><td>$arr[1]</td></tr>";
            echo "<tr><th>Colour</th><td>$arr[2]</td></tr>";
            echo "<tr><th>Display Size</th><td>$arr[3]</td></tr>";
            echo "<tr><th>Screen Tyle</th><td>$arr[4]</td></tr>";
            echo "<tr><th>HD Tech Resolution</th><td>$arr[5]</td></tr>";
            echo "<tr><th>Smart Tv</th><td>$arr[6]</td></tr>";
            echo "<tr><th>Motion Sensor</th><td>$arr[7]</td></tr>";
            echo "<tr><th>HDMI</th><td>$arr[8]</td></tr>";
            echo "<tr><th>USB</th><td>$arr[9]</td></tr>";
            echo "<tr><th>Built In Wi-Fi</th><td>$arr[10]</td></tr>";
            echo "<tr><th>Launch Year</th><td>$arr[11]</td></tr>";
            echo "<tr><th>Wall Mount</th><td>$arr[12]</td></tr>";
            echo "</table>";
            echo "</div>";
            echo "</div>";
            
echo "<div class='col-sm-2' ></div>";
echo "</div>";
        ?>
        
        <?php
        include './Footer.html';
        ?>
    </body>
</html>
