<?php
        session_start();
        if(!isset($_SESSION['uname']))
        {
            header("location:login.php");
        }

        $msg = " ";
        if (isset($_POST['change'])) 
        {
        if(isset($_SESSION['uname']))
        {
        $new_pass = $_POST['password'];
        $user_id = $_SESSION['uid'];
        $link = mysqli_connect("localhost","root","","eshopdb");
        $res = mysqli_query($link, "select * from usermaster where  user_id = '$user_id' ");
        $result = mysqli_query($link, "UPDATE usermaster SET user_pwd = '$new_pass' where user_id = '$user_id' ");
//         $res = mysqli_query($link, "select * from usermaster where  user_id = '$user_id' ");
//        if(mysqli_num_rows($result)>0)
//        {
            $r = mysqli_fetch_array($res);
//            if ($r ) 
              if(strstr($new_pass,$r[3]))
            {
//             $_POST['password'] = $r[3];
             $msg = "<font color='white'>  Your Old and New Password Are Same</font>";
//             header("location:p_home.php");
        }
        else 
        {
            $msg = "<font color='white'>Password Changed Successfully !!!</font>";
        }  
//        $msg = "<font color='white'> Password Changed Successfully</font>";
        mysqli_close($link);
        }
        }
//        else 
//        {
//            $msg = "<font color='white'>Error in Changing the Password </font>";
//        }
        
?>
<!DOCTYPE html>
<html>
    <head>
         <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change Password</title>
    </head>
    <body style="background-image: linear-gradient(to left,crimson, darkmagenta">
        <div class="container-fluid">
        <?php
        include './Header.php';
        ?>
        
        <div class="row" >

                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <form method="post" style="padding-top:100px;">

                        <div class="jumbotron" style="background-color: palevioletred;">

                            <center style="font-size:25px; color:#fff; font-family: new times roman"> !!! Change Your  Password  !!! </center><br>

                                <div class="form-group">
                                    <label for="">Enter Your New Password :</label> 
                                    <input type="password" name="password" id="" class="form-control" required="" placeholder="Enter Password Your New Password here"><br>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="change" value="Change Password" class="btn btn-primary form-control"" >
                                </div>

                            </div>
                    </form>
                    <?php
                            echo $msg;
                    ?>
                </div>
                
                <div class="col-sm-3">
                </div>
            
            </div>
            
            <div class="row" style="height: 110px">
                <div class="col-sm-12">
                </div>
            </div>
                
        
        <?php
        include './Footer.html';
        ?>
        </div>
    </body>
</html>
