<?php
        session_start();

        $msg = " ";
        if (isset($_POST['login'])) 
        {
        $uname = $_POST['u_email'];
        $password = $_POST['u_password'];
 //       $password = md5($_POST['u_password']);       // This is for encrypted password when password save in databases in the encrypted form....
        $link = mysqli_connect("localhost","root","","eshopdb");
        $result = mysqli_query($link, "select * from usermaster where user_email = '$uname' and user_pwd = '$password' and role='admin' ");
        if(mysqli_num_rows($result)>0)
        {
            $r = mysqli_fetch_array($result);
             $_SESSION['admin'] = $r[1];
             $_SESSION['admin_uid'] = $r[0];
             $_SESSION['role']=$r[7];
             header("location:Admin_Panel.php");
        }
        else 
        {
            $msg = "<font color='white'> Invalid Username and Password or You Are Not Admin</font>";
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
            <title>Admin Panel  Login</title>
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
         <body style="background-image: linear-gradient(to top, darkmagenta, crimson">

            <div class="container-fluid maindiv" >
                <header>
                    <span  > 
                        <div class="eap" > Eshop Admin Panel </div>
                    </span>


                    <div class="dropdown macct">
                        <a  id="myacnt" class=" dropdown-toggle" data-toggle="dropdown" href="">  <?php
                                    if(isset($_SESSION['admin']))
                                    {
                                        echo " My Accounts <span class='caret'> </span> ";
                                    }
                                    else
                                    {
                                         echo "";
                                    }
                                    ?> </a>


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
                                    <li> <a href="Add_New_User.php"> Add New User </a> </li>
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
                    <form method="post" style="padding-top:100px;">

                        <div class="jumbotron" style="background-color: palevioletred;">

                            <center style="font-size:25px; color:#330bd6; font-family: new times roman"> !!! Please Login To Accesss Admin Panel  !!!</center><br>

                            <div class="form-group">
                                <label for="">User Name :</label>
                                <input type="email" name="u_email" id="" class="form-control" required="" placeholder="Enter User Name">
                                </div>

                                <div class="form-group">
                                    <label for="">Password :</label>
                                    <input type="password" name="u_password" id="" class="form-control" required="" placeholder="Enter Password">
                                </div><br>

                                <div class="form-group">
                                    <input type="submit" name="login" value="Login" class="btn btn-success form-control"" >
                                </div>

                            </div>

                    </form>
                    <?php
                            echo $msg;
                    ?>
                </div>

            <div class="col-sm-3">
            </div>

                </section>   

            </div>
        </body>
    </html>
