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
        <title>My Profile</title>
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
    <body  style="background-image: linear-gradient(to left,#b993d6,#8ca6db)">
        
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

            <div class="col-sm-3">
            </div>
            
            <div class="col-sm-3">
                <?php
                    if(isset($_SESSION['admin']))
                    {
                        $user_id = $_SESSION['admin_uid'];
                        $link = mysqli_connect("localhost", "root", "", "eshopdb");
                        $qry = "select * from usermaster where user_id in ($user_id)";
                        $result = mysqli_query($link, $qry);
                        $r = mysqli_fetch_array($result);
                        echo "<br><br>";
                        echo "<center><h2 style='color:blue;'>Welcome $r[1]</h2></center>";
                        echo "<hr>";
                        echo "<table class='table hovered'>";
                                echo "<tr><th>Email :</th><td>$r[2]</td></tr>";
                                echo "<tr><th>Mobile :</th><td>$r[5]</td></tr>";
                                echo "<tr><th>DOB :</th><td> $r[6] </td></tr>";
                        echo "</table>";
                    }
                    else
                        echo "";
                ?>
            </div>
            
            <div class="col-sm-3">
            </div>
            
        </div>

    </body>