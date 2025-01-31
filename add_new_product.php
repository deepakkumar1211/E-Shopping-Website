<?php
        session_start();
        if(!isset($_SESSION['admin']))
        {
            header("location:admin_login.php");
        }


$msg = " ";
if (isset($_POST['sub'])) 
{
    $model_id = $_POST['model_id'];
    $p_name = $_POST['product_name'];
    $p_price = $_POST['product_price'];
    $p_type = $_POST['product_type'];
    $sou = $_FILES['product_img']['tmp_name'];
    $des = $_SERVER['DOCUMENT_ROOT']."/E_Shop_Project/pimages/".$_FILES['product_img'] ['name'];
    $path = "";
    if (move_uploaded_file($sou, $des))
        $path = "pimages/".$_FILES['product_img']['name'];

    $link = mysqli_connect("localhost", "root", "", "eshopdb");
    // $qry = "insert into productmaster(pid, pname,pprice, ptype, pimage) Values($model_id, '$p_name' ,$p_price, '$p_type', '$path')";
    $qry = "insert into productmaster(pid, pname,pprice, ptype, pimage) Values(11001, 'Realme Narzo 50i' ,17000, 'Mobile', '$path')";
//    echo $qry;
    mysqli_query($link,$qry);
    if(mysqli_affected_rows($link)>0)
        {
        $msg="  <font color='white' size='15px'>   Product Added !!!<font>";
        }
        else
        {
        $msg="  <font color='red' size='15px'> Error is found !!!<font>";
        }
        mysqli_close($link);
        }
    ?>


<!DOCTYPE html>
<html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add New Product</title>
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
                .maindiv{
                    padding: 0px;
                    text-decoration: none;
                }
                header{
                    background-color: #614983;
                    height: 100px;
                    position: -webkit-sticky;
                    /*position: sticky;*/ 
                }
                .eap{
                    display: inline-block;
                    font-size: 40px;
                    font-family: new times roman;
                    color:white;
                    padding: 20px 40px;

                }
                .macct{
                    float: right;
                    font-size: 19px;
                    color: white;
                    padding-right: 70px;
                    padding-top: 65px;
                    background-color:  #614983;
                }
                #myacnt{
                    text-decoration: none;
                    color: white;
                    display: inline-block;
                }
                #myacnt:hover{
                    color: greenyellow;
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
        <!--<body style="background-image: linear-gradient(to right, cyan,yellow,lawngreen,cornflowerblue">-->
<body style="background-image: linear-gradient(to right,crimson,darkorchid">

            <div class="container-fluid maindiv" >
                <header>
                    <span  > 
                        <div class="eap" > Eshop Admin Panel </div>
                    </span>


                    <div class="dropdown macct">
                        <a  id="myacnt" class=" dropdown-toggle" data-toggle="dropdown" href=""> My Account <span class="caret"> </span>  </a>


                        <ul class="dropdown-menu">
                            <li> <a href="admin_profile.php"> Profile </a> </li>
                            <li> <a href="admin_logout.php"> Logout </a> </li>
                        </ul>
                    </div>

                </header>

                <!--This is navigation Part-->
                <section class="row" >

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
                                    <li> <a href="#"> View All Orders </a> </li>
                                </ul>
                            </div>


                        </div>
                    </div>

                    <div class="col-sm-2">
                </div>

                <div class="col-sm-5">
                    <form method="post"  enctype="multipart/form-data" style="padding-top: 50px;">

                        <div class="jumbotron" style="background-color: plum; ">

                            <lable style="font-size:25px;padding-left: 130px; color:#330bd6; font-family: new times roman"> !!! Add New Product  !!!</lable>

                            <div class="form-group">
                                <label>Model ID :</label>
                                <input type="text" name="model_id" value="" placeholder="ABC12345" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" name="product_name" value=""  placeholder="Samsung Galaxy" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Price </label>
                                <input type="number" name="product_price" value=""  placeholder="12000" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Type </label>
                                <input type="text" name="product_type" value=""  placeholder="Mobile / Tv" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="product_img" value=""  required="" class="form-control"/>
                            </div>

                            <input type="submit" name="sub" value="ADD" class="btn btn-success">

                            <input type="reset" name="reset" value="Reset" class="btn btn-warning">

                        </div>

                        <?php
                        echo $msg;
                        ?>

                </form>

            </div>

            <div class="col-sm-3">
            </div>

                </section>   

            </div>
        </body>
    </html>
