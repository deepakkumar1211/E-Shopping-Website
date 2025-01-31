 <?php
        session_start();
        if(!isset($_SESSION['admin']))
        {
            header("location:admin_login.php");
        }
 
    $msg = "";
    if(isset($_POST['register']))
    {
//      $ise kuch bhi naam de sakte hai = $_POST['isme input me naam= jo nam diye hai'];
        $name = $_POST['u_name'];
        $email = $_POST['u_email'];
        $mobile = $_POST['u_mobile'];
        $gender = $_POST['u_gender'];
        $dob = $_POST['u_dob'];
        $password = $_POST['u_password'];
        $roll = $_POST['roll'];
        
        $link = mysqli_connect("localhost","root","", "eshopdb");
        
        $qry = "insert into usermaster (user_name, user_email, user_pwd,  user_gender, user_mobile, user_dob, role) value('$name', '$email', '$password', '$gender', $mobile, '$dob', '$roll' )";
        
        mysqli_query($link,$qry);
        if(mysqli_affected_rows($link)>0)
                $msg="  <font color='white' size='5px'> Register Successfully Done  !!!!!<font><br><br>";
        else
            $msg="  <font color='red'> Error In Registration  !!!!!<font>";
        mysqli_close($link);
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Add New User </title>
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
     <body style="background-image: linear-gradient(to right, yellowgreen, green">
        <?php
        include './admin_header.php';
        ?>

        <div class="container-fluid">
            <div class="row">

               <div class="col-sm-2"  style="background-color: #ef869c; height: 792px ">
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
                    <form method="post" style="padding-top: 35px;">

                        <div class="jumbotron" style="background-color: plum;">

                            <lable style="font-size:25px;padding-left: 120px; color:#330bd6; font-family: new times roman"> !!!  Add New User  !!!</lable>

                            <div class="form-group">
                                <label for=""> Name :</label>
                                <input type="text" name="u_name" id="" class="form-control" required="" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="">Email ID :</label>
                                <input type="email" name="u_email" id="" class="form-control" required="" placeholder="Enter Email">
                            </div>

                            <!-- <div class="form-group">
                                          <label for="">Select Gender :</label>
                                          <select name="t4" id="" class="form-control">
                                               <option></option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                            </select>
                                   </div>-->

                            <div class="form-group">
                                <label for="">Gender :</label>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="u_gender" value="Male" required=""><label for=""> &nbsp; Male</label>
                                </div>

                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="u_gender" value="Female" required><label for=""> &nbsp; Female </lable>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Mobile Number :</label>
                                <input type="number" name="u_mobile" id="" class="form-control" required="" placeholder="Enter Mobile Number">
                            </div>

                            <div class="form-group">
                                <label for="">Date of Birth :</label>
                                <input type="date" name="u_dob" id="" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="">Password :</label>
                                <input type="password" name="u_password" id="" class="form-control" required="" placeholder="Enter Password">
                            </div>

                            <div class="form-group">
                                <label for="">Confirm Password :</label>
                                <input type="password" name="cnfrm_password" id="" class="form-control" required="" placeholder="Confirm Password">
                            </div>
                            
                             <div class="form-group">
                                          <label for="">Roll :</label>
                                          <select name="roll" id="" class="form-control">
                                               <option>--Select Roll--</option>
                                               <option value="client"> Client </option>
                                               <option value="admin"> Admin </option>
                                            </select>
                                   </div>

                            <input type="submit" name="register" value="Register" class="btn btn-success">

                            <input type="reset" name="reset" value="Reset" class="btn btn-warning">

                        </div>

                        <?php
                        echo $msg;
                        ?>

                    </form>

                </div>

                <div class="col-sm-3">
                </div>

            </div>
        </div>

    </body>
</html>
