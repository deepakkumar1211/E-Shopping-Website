<?php

    session_start();
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
 //       $password = md5($_POST['u_password']);     // This is for encrypted password save in database....
        
        $link = mysqli_connect("localhost","root","", "eshopdb");
        
        $qry = "insert into usermaster (user_name, user_email, user_pwd,  user_gender, user_mobile, user_dob, role) value('$name', '$email', '$password', '$gender', $mobile, '$dob', 'client' )";
        
        mysqli_query($link,$qry);
        if(mysqli_affected_rows($link)>0)
                $msg="  <font color='green' size='20px'> Register Successfully Done  !!!!!<font>";
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
        <title> Registration Page </title>
        <!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

                <script>
                    // This is for check both password are same or not .....
                function Validate()
                {
                    temp = true;
                    pass = document.getElementById("p1").value;
                    cpass = document.getElementById("p2").value;
                    if(pass != cpass || pass.length<8)
                    {
                        temp=false;
                        document.getElementById("p1").style="border-color:red";
                        document.getElementById("p2").style="border-color:red";
                    }
                    else
                    {
                        temp=true;
                        document.getElementById("p1").style="";
                        document.getElementById("p2").style="";
                    }
                    return temp;
                }
                
                // This is for the email already exist or not.....
                function ValidateEmail()
                {
                    email = document.getElementById("t2").value;
                    obj = new XMLHttpRequest();
                    obj.open("get", "checkEmail.php?eid="+email,true);
                    obj.send();
                    obj.onreadystatechange=function()
                    {
                        if (obj.status==200 && obj.readyState==4)
                        {
                            document.getElementById("d1").innerHTML=obj.responseText;
                        }
                    }
                }
        </script>

    </head>
    <body style="background-image: linear-gradient(to right, #647DEE,#7F53AC">
        <?php
        include './Header.php';
        ?>

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <form method="post" style="padding-top:20px;" onsubmit="return Validate()">

                        <div class="jumbotron" style="background-color: pink;">

                            <lable style="font-size:25px;padding-left: 120px; color:#330bd6; font-family: new times roman"> !!! Welcome To Registration Page  !!!</lable>

                            <div class="form-group">
                                <label for=""> Name :</label>
                                <input type="text" name="u_name" id="" class="form-control" required="" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="">Email ID :</label>
                                <input id="t2" type="email" name="u_email" onchange="ValidateEmail()" class="form-control" required="" placeholder="Enter Email">
                                <div id="d1"></div>
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
                                <input id="p1" type="password" name="u_password" class="form-control" required="" placeholder="Enter Password">
                            </div>

                            <div class="form-group">
                                <label for="">Confirm Password :</label>
                                <input id="p2" type="password" name="cnfrm_password"  class="form-control" required="" placeholder="Confirm Password">
                                <div>(Password contain minimum 8 character)</div>
                            </div>

                            <input type="submit" name="register" value="Register" class="btn btn-success">

                            <input type="reset" name="reset" value="Reset" class="btn btn-warning">

                        </div>

                        <?php
                        echo $msg;
                        ?>

                    </form>

                </div>

                <div class="col-sm-4">
                </div>

            </div>
        </div>

    </body>
</html>
