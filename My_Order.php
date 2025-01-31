
<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header("location:login.php?page=myOrder.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Order</title>
<!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <style>

           
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!--header-->
            <?php
            include("header.php");
            ?>


            <div class="row">
                <?php
                if (isset($_SESSION['uid'])) {
                    $user_id = $_SESSION['uid'];
                    $link = mysqli_connect("localhost", "root", "", "eshopdb");
                    $qry = "select * from p_order where user_id = '$user_id' ;";
                    $result = mysqli_query($link, $qry);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='table table-hovered' valign='center'>";
                        echo "<tr>";
                        echo "<th>Order Id</th>";
                        echo "<th></th>";
                        echo "<th>Product Name</th>";
                        echo "<th>Order Date</th>";
                        echo "<th>Address</th>";
                        echo "<th>Status</th>";
                        echo "<th></th>";
                        echo "</tr>";

                        while ($r = mysqli_fetch_array($result)) {
                            
                            $arr = explode(",", $r[2]);
                            foreach ($arr as $v) {
                                $prdct = mysqli_query($link,"select * from productmaster where pid=$v");
                                $res = mysqli_fetch_array($prdct);
                                echo "<tr><td>$r[0]</td>";
                                echo "<td><img src='$res[4]' width='20%' height='20%'/></td>";
                                echo "<td>$res[1]</td>";
                                echo "<td>$r[3]</td>";
                                echo "<td>$r[5]</td>";
                                echo "<td>$r[7]</td>";
                                if($r[7]!=='Delivered')
                                {
                                    echo "<td><a class='btn btn-danger' href='cancel.php?pid=$res[0]&oid=$r[0]'>Cancel</td>";
                                }
                                
                                echo "</tr>";
                            }
                        }
                        echo "</table>";
                    }
                    else
                {
                        echo "<center><h1 style='color:tomato; padding-top:50px;'>You have no order any Product !!!</h1></center>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-12' style='height:398px'></div>";
                        echo "</div>";
                }
                    mysqli_close($link);
                }
                ?>

            </div>


            <!--footer-->
            <div style="margin-top: 370px;">
                    <?php
                        include ("footer.html");
                    ?>
            </div>
        </div>
    </body>
</html>