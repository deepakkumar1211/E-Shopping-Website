<?php
$msg = " ";
if (isset($_POST['sub'])) 
{
//  $ise kuch bhi naam de sakte hai = $_POST['isme input me naam= jo nam diye hai'];
    $pid = $_POST['product_id'];
    $in_box = $_POST['in_box'];
    $color = $_POST['color'];
    $displaysize = $_POST['display_size'];
    $screentype = $_POST['screen_type'];
    $hd_res = $_POST['hd_tech_res'];
    $smarttv = $_POST['smart_tv'];
    $m_sensor = $_POST['motion_sensor'];
    $hdmi = $_POST['hdmi'];
    $usb = $_POST['usb'];
    $built_wifi = $_POST['built_in_wifi'];
    $L_Year = $_POST['Lunch_Year'];
    $wall_mount = $_POST['wall_mount'];
    $link = mysqli_connect("localhost", "root", "", "eshopdb");
    $qry = "insert into tv_specification(pid, In_The_Box, Color, Display_Size, Screen_type,  HD_Tech_Res, Smart_Tv, Motion_Sensor, HDMI, USB, Built_In_WiFi, Launch_Year, Wall_Mount) Values($pid, '$in_box', '$color', '$displaysize', '$screentype', '$hd_res', '$smarttv', '$m_sensor', '$hdmi ', '$usb', '$built_wifi', $L_Year, '$wall_mount')";
//    echo $qry;
    mysqli_query($link,$qry);
     if(mysqli_affected_rows($link)>0)
         {
         $msg="  <font color='white' size='18px'> Television Specification Added Succesfully !!!<font>";
         }
        else
         {
         $msg="  <font color='red' size='28px'> Error is found !!!<font>";
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
            <title>Add Television Specification</title>
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
                    <span> 
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

                            <lable style="font-size:25px; color:#330bd6; font-family: new times roman"><center> !!!  Add Television Specification  !!! </center></lable>
                            
                            <div class="form-group">
                                <label>Product ID : </label>
                                <input type="number" readonly name="product_id" value="<?php
                                if(isset($_GET['pid']))
                                    echo $_GET['pid'];
                                ?>"  required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>In The Box  :</label>
                                <input type="text" name="in_box" value="" placeholder="Cable" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Color : </label>
                                <input type="text" name="color" value=""  placeholder="Black" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Display Size : </label>
                                <input type="text" name="display_size" value=""  placeholder="32-inch" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Screen Type : </label>
                                <input type="text" name="screen_type" value=""  placeholder="Full HD 4K" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>HD Tech Resolution : </label>
                                <input type="text" name="hd_tech_res" value=""  placeholder="" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Smart TV : </label>
                                <div style="padding-left:105px; display: inline">
                                    <input type="radio" name="smart_tv" value="Yes" required=""><label for=""> &nbsp; Yes</label>
                                </div>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="smart_tv" value="No" required><label for=""> &nbsp; No </lable>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label for="">Motion Sensor : </label>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="motion_sensor" value="Yes" required=""><label for=""> &nbsp; Yes</label>
                                </div>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="motion_sensor" value="No" required><label for=""> &nbsp; No </lable>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>HDMI : </label>
                                <input type="text" name="hdmi" value=""  placeholder="" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>USB : </label>
                                <input type="text" name="usb" value=""  placeholder="" required="" class="form-control"/>
                            </div>
                            
                             <div class="form-group">
                                <label for="">Built_In_Wi-Fi : </label>
                                <div style="padding-left:75px; display: inline">
                                    <input type="radio" name="built_in_wifi" value="Yes" required=""><label for=""> &nbsp; Yes</label>
                                </div>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="built_in_wifi" value="No" required><label for=""> &nbsp; No </lable>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Launch Year : </label>
                                <input type="text" name="Lunch_Year" value=""  placeholder="2022" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Wall Mount : </label>
                                <div style="padding-left:95px; display: inline">
                                    <input type="radio" name="wall_mount" value="Yes" required=""><label for=""> &nbsp; Yes</label>
                                </div>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="wall_mount" value="No" required><label for=""> &nbsp; No </lable>
                                </div>
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
