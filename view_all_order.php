<?php
        session_start();
        if(!isset($_SESSION['admin']))
        {
            header("location:admin_login.php");
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View All Order</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style>
            *{
                box-sizing: border-box;
                list-style: none;
                margin: 0px;
            }

            body{
                margin: 0px;
            }
            .sidenav{
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 20px;
                text-decoration: none;
            }
            .sidenav:hover{
                background-color: orange;
                border: 1px solid red;
            }
            section{
                text-decoration: none;
            }
            .sntext{
                text-decoration: none;
                color: white;
                font-size: 17px;
            }
            #home{
                text-decoration: none;
                color: white;
                display: inline-block;
                font-size: 20px;
            }
            #home:hover{
                color: red;
            }
            #product:hover{
                color: red;
            }
            #users:hover{
                color: red;
            }
            #order:hover{
                color: red;
            }
            #product{
                text-decoration: none;
                color: white;
                display: inline-block;
                font-size: 20px;

            }
            #users{
                text-decoration: none;
                color: white;
                display: inline-block;
                font-size: 20px;

            }
            #order{
                text-decoration: none;
                color: white;
                display: inline-block;
                font-size: 20px;
            }
        </style>

    </head>
    <body  style="background-image: linear-gradient(to right,cyan,lightpink)">
        <?php
        include './admin_header.php';
        ?>

        <div class="row">

            <div class="col-sm-2"  style="background-color: #ef869c; height: 637px ">
                <div style="padding-top:30px;">

                    <div class="sidenav">
                        <a href="admin_panel.php"  id="home" style="text-decoration:none;">Home</a>
                    </div>

                    <div class="dropdown sidenav ">
                        <a class=" dropdown-toggle"  id="product" data-toggle="dropdown" href=""> Product <span class="caret"> </span>  </a>
                        <ul class="dropdown-menu">
                            <li> <a href="add_new_product.php"> Add New Product </a> </li>
                            <li> <a href="view_product.php"> View Products </a> </li>
                        </ul>
                    </div>

                    <div class="dropdown  sidenav">
                        <a  class=" dropdown-toggle "  id="users" data-toggle="dropdown" href=""> Users <span class="caret"> </span>  </a>
                        <ul class="dropdown-menu">
                            <li> <a href="Add_New_user.php"> Add New User </a> </li>
                            <li> <a href="view_user.php"> View User </a> </li>
                        </ul>
                    </div>

                    <div class="dropdown sidenav">
                        <a  class=" dropdown-toggle "  id="order" data-toggle="dropdown" href=""> Order <span class="caret"> </span>  </a>
                        <ul class="dropdown-menu">
                            <li> <a href="view_all_order.php"> View All Orders </a> </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-sm-1">
            </div>
            
            <div class="col-sm-8">
                <div class="table-responisive">
                    <?php
                        $link= mysqli_connect("localhost","root","","eshopDB");
                        $result= mysqli_query($link, "select * from p_order");
                        if(mysqli_num_rows($result)>0)
                        {
                            echo "<table style='margin-top:50px;' class='table table-hovered'  ";
                            echo "<tr>";
                                    echo "<th>Order ID</th>";
                                    echo "<th>User ID</th>";
                                    echo "<th>Product ID</th>";
                                    echo "<th> Order Date</th>";
                                    echo "<th>Amount</th>";
                                    echo "<th><center>Adress</center></th>";
                                    echo "<th>Payment</th>";
                                    echo "<th><center>Status</center></th>";
                                echo "</tr>";
                            while($r= mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>$r[0]</td>";
                                echo "<td>$r[1]</td>";
                                echo "<td>$r[2]</td>";
                                echo "<td>$r[3]</td>";
                                echo "<td>$r[4]</td>";
                                echo "<td>$r[5]</td>";
                                echo "<td>$r[6]</td>";
                                echo "<td>$r[7]</td>";
                            echo "</tr>";    
                            }
                            echo "</table>";
                            
                        }
                        else
                        {
                            echo "<h2 >No product Added yet..</h2>";
                        }
                        mysqli_close($link);
                    ?>
                </div>
            </div>
            
            <div class="col-sm-1">
            </div>
            
        </div>

    </body>