<?php
$msg = " ";
if (isset($_POST['sub'])) 
{
//  $ise kuch bhi naam de sakte hai = $_POST['isme input me naam= jo nam diye hai'];
    $pid = $_POST['product_id'];
    $os = $_POST['os_type'];
    $processor = $_POST['processor_type'];
    $color = $_POST['color'];
    $sim = $_POST['sim_type'];
    $sim_slot = $_POST['hybrid_sim_slot'];
    $displaysize = $_POST['display_size'];
    $resolution = $_POST['resolution'];
    $internalstorage = $_POST['internal_storage'];
    $ram = $_POST['ram'];
    $pcamera = $_POST['primary_camera'];
    $scamera = $_POST['secondary_camera'];
    $n_type = $_POST['network_type'];
    $b_capacity = $_POST['battery_capacity'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $warranty = $_POST['warranty_summary'];
    $link = mysqli_connect("localhost", "root", "", "eshopdb");
    $qry = "insert into mobilespecification(pid, OS,Processor, Color, SIM_Type, Hybrid_Sim_Slot, Dispaly_size, Resolution, Internal_Storage, RAM, Primary_Camera, Secondary_Camera, Network_Type, Battery_Capacity, Width, Height, Warranty_Summary) Values($pid, '$os' ,'$processor', '$color', '$sim', '$sim_slot', '$displaysize', '$resolution', '$internalstorage', '$ram', '$pcamera', '$scamera', '$n_type', '$b_capacity', '$width', '$height', '$warranty')";
//    echo $qry;
     mysqli_query($link,$qry);
     if(mysqli_affected_rows($link)>0)
         {
         $msg="  <font color='white' size='5px'> Mobile Specification Added Succesfully !!!<font><br><br>";
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
            <title>Add Mobile Specification</title>
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
                            <li> <a href="admin_logout.php.php"> Logout </a> </li>
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
                                    <li> <a href="view_all_order.php"> View All Orders </a> </li>
                                </ul>
                            </div>


                        </div>
                    </div>

                     <div class="col-sm-2">
                </div>

                <div class="col-sm-5">
                    <form method="post"  enctype="multipart/form-data" style="padding-top: 50px;">

                        <div class="jumbotron" style="background-color: plum; ">

                            <lable style="font-size:25px; color:#330bd6; font-family: new times roman"><center> !!! Add Mobile Specification !!! </center></lable>
                            
                            <div class="form-group">
                                <label>Product ID : </label>
                                <input type="number" readonly name="product_id" value="<?php
                                if(isset($_GET['pid']))
                                    echo $_GET['pid'];
                                ?>"  required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Operating System  :</label>
                                <input type="text" name="os_type" value="" placeholder="Android" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Processor : </label>
                                <input type="text" name="processor_type" value=""  placeholder="hexa-core" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Color : </label>
                                <input type="text" name="color" value=""  placeholder="Grey" required="" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>SIM type : </label>
                                <input type="text" name="sim_type" value=""  placeholder="GSM" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Hybrid SIM Slot : </label>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="hybrid_sim_slot" value="Yes" required=""><label for=""> &nbsp; Yes</label>
                                </div>

                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="hybrid_sim_slot" value="No" required><label for=""> &nbsp; No </lable>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Display Size : </label>
                                <input type="text" name="display_size" value=""  placeholder="6-inch" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Resoluton : </label>
                                <input type="text" name="resolution" value=""  placeholder="1980-1080" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Internal Storage : </label>
                                <input type="text" name="internal_storage" value=""  placeholder="64GB" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>RAM : </label>
                                <input type="text" name="ram" value=""  placeholder="6GB" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Primary Camera : </label>
                                <input type="text" name="primary_camera" value=""  placeholder="16 MP" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Secondary Camera : </label>
                                <input type="text" name="secondary_camera" value=""  placeholder="64 MP" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Network Type : </label>
                                <input type="text" name="network_type" value=""  placeholder="4G/5G" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Battery Capacity : </label>
                                <input type="text" name="battery_capacity" value=""  placeholder="5000 MaH" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Width : </label>
                                <input type="text" name="width" value=""  placeholder="3-inch" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Height : </label>
                                <input type="text" name="height" value=""  placeholder="7-inch" required="" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Warranty Summary : </label>
                                <textarea name="warranty_summary" placeholder="Enter Warranty Summary"  rows="4" required="" class="form-control"></textarea>
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
