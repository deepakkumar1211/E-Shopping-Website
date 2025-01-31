<?php
        session_start();

        $msg = " ";
        if (isset($_POST['login'])) 
        {
        $uname = $_POST['u_email'];
        $password = $_POST['u_password'];
 //       $password = md5($_POST['u_password']);       // This is for encrypted password when password save in databases in the encrypted form....
        $link = mysqli_connect("localhost","root","","eshopdb");
        $result = mysqli_query($link, "select * from usermaster where user_email = '$uname' and user_pwd = '$password' ");
        if(mysqli_num_rows($result)>0)
        {
            $r = mysqli_fetch_array($result);
             $_SESSION['uname'] = $r[1];
             $_SESSION['uid'] = $r[0];
             header("location:p_home.php");
        }
        else 
        {
            $msg = "<br><font color='red' > Invalid Username and Password </font>";
        }
        mysqli_close($link);
        }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style>
            
@import url('https://fonts.googleapis.com/css??family=Nunito+Sans:wght@200&display=swap');
  :root{
    font-style: 'Nunito Sans', sans-serif;
  }
            
*{
    box-sizing: border-box;
    list-style: none;
    margin: 0px;
}

body{
    /*margin: 0px;*/
    background: #131315;
    /*background-image: linear-gradient(to left,pink,white);*/
    font-family: var(--font-style);
}


.deep{
    background-color: #2874f0;
    height: 125px;
}

.clogo{
    margin-top: 15px;
}

.cname{
    text-align: center;
    font-size: 18px;
    font-family: cursive;
    color: #fff;
}

.search1{
    display: flex;
    justify-content: flex-start;
    height: 100%;
    min-width: 304px;
    /*width: calc(100% - 540px); dont remove this comment*/   
    margin: 0 auto 0 12px;
    align-items: center;
}


.search2 {
    display: inline-block;
    /*box-shadow: 0 2px 4px 0 rgb(0 0 0 / 23%); dont remove this comment*/
    width: 100%;
    height: 36px;
    max-width: 564px;
    position: relative;
    display: flex;
    flex: auto;
    border-radius: 2px;
    background-color: #fff;

}

.search3{
    display: flex;
    flex: auto;
    border-radius: 2px;
    background-color: #fff;

}
.search4{
    position: relative;
    display: inline-block;
    width: 100%;
}
.search5 {
    padding: 0 16px;
    border-radius: 2px 0 0 2px;
    border: 0;
    outline: 0 none;
    font-size: 14px;
    height: 36px;
    width: 100%;
}

.search6{
    justify-content: flex-end;
    border: 1px solid #fff;
    background-color: #fff;
    height: 36px;
    width: 44px;
    border-radius: 2px;
    cursor: pointer;
    padding: 4px 12px 0 8px;
}

.search7{
    /*fill: #2874f0;*/
}
.search2 .search8 {
    border-radius: 0 0 2px 2px;
    border-top: 1px solid #e0e0e0;
    position: absolute;
    background-color: #fff;
    color: #000;
    z-index: 9;
    top: 35px;
    display: none;
    /*box-shadow: 2px 3px 5px -1px rgb(0 0 0 / 50%);*/
    overflow: hidden;
    white-space: nowrap;
}

.cart1{
    display: flex;
    height: 100%;
    width: 100%;
    padding-top: 50px;

}

/*.amcart{
        align-items: center;
        display: flex;
        line-height: 20px;
        font-size: 16px;
        font-weight: 500;
        color: #fff;
        position: relative;
        text-decoration: none;
        padding-top: 30px;
}   */

.amcart{
    text-decoration: none;
}

#mycart{
    text-decoration: none;
    align-items: center;
    display: inline-flex;
    line-height: 20px;
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    position: relative;
    font-size: 17px;
}

#mycart:hover{
    color: red;
}

.signin{
    align-items: center;
    display: flex;
    line-height: 20px;
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    position: relative;
    text-decoration: none;
    font-size: 17px;
    padding-top: 45px;


}
.sign_in{
    border: 1px solid white;
    background: white;
    color: #2874f0;
    padding: 4px 15px;
    border-radius: 4px;
}
.sign_in:hover{
    color: red;
    background-color: yellow;
    border-color: red;
}

nav{
    background-color: #333;
    margin: 0px;
    align-items: center;
    padding-left: 30px;
    padding-top: 12px;
    height: 50px;
    text-decoration: none;
}

.nav1{
     text-decoration: none;
}
.nav1:hover{
    color: yellow;
}

.nav2:hover{
    color: orange;
}

.nav2{
    text-decoration: none;
    padding-left: 30px;
    padding-right: 30px;
    font-size: 18px;
    
}
nav>span>a{
    color: white;
}

.login-box{
    position: absolute;
    top: 60%;
    left: 50%;
    /*width: 400px;*/
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: #242026;
    box-shadow: 0 25px 35px rgba(50, 13, 237, 0.86);
    border-radius: 10px;
}

.login-box h2{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}

.login-box .user-box input{
    position: relative;
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 25px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.login-box .user-box label{
    position: relative;
    left: 0;
    top: -60px;
    padding: 5px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.login-box .user-box input:focus~label,
.login-box .user-box input:valid~label {
    top: -85px;
    left: 0;
    color: #8F7CEC;
    font-size: 12px;
}

#submit{
    padding: 8px 20px;
    width:40%;
    color: #CBBDDB;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    letter-spacing: 4px;
    border: 1px solid #8F7CEC;
    margin: auto;
}

#submit:hover{
    background: #8F7CEC;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(50, 13, 237, 0.86), 0 0 25px rgba(50, 13, 237, 0.86),  0 0 50px rgba(50, 13, 237, 0.86), 0 0 100px rgba(50, 13, 237, 0.86);
}

.button-form{
    display: flex;
    flex-direction: row;
    margin-top: 0px;
}

#register{
    font-size: 14px;
    text-decoration: none;
    color: #CBBDDB;
    margin: auto;
    width: 60%;
   text-align: center;
  }
  
#register a{
    margin: auto;
    color: #8F7CEC;
    text-decoration: none;
  }

 </style>

    </head>
    <body>
        <div class="container-fluid" style="padding:0px;">
            <section class="row" >
                <div class="deep">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-2 clogo"><img src="https://www.frontbazzar.com/Content/ProductImages/700x2956724_2019382271.jpg" alt="" width="90%" height="80px" ">
                        <span class="cname">&nbsp;&nbsp;&nbsp;&nbsp; Shop very easily  </span>
                    </div>

                    <div class="col-sm-5 search1">
                        <form class="search2 header-form-search" action="search.php" method="GET">
                            <div class="col-12-12 search3">
                                <div class="search4">
                                    <input class="search5" type="text" title="Search for products, brands and more" name="search" autocomplete="off" placeholder="Search for products, brands and more" value="">
                                </div>
                                <button class="search6" type="submit" >
                                    <svg width="20" height="20" viewBox="0 0 17 18" class="" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#2874F1" fill-rule="evenodd">
                                    <path class="search7" d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path>
                                    <path class="search7" d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path>
                                    </g>
                                    </svg>
                                </button>
    <!--                            <input type="hidden" name="otracker" value="search">
                                <input type="hidden" name="otracker1" value="search">
                                <input type="hidden" name="marketplace" value="FLIPKART">
                                <input type="hidden" name="as-show" value="off">
                                <input type="hidden" name="as" value="off">    -->
                            </div>
                            <ul class="col-12-12 search8">

                            </ul>
                        </form>

                    </div>

<!--                    <div class="col-sm-1">
                    </div>-->

                    <div class="col-sm-1">
                        <div class="cart1" >
                            <a  class="amcart"  href="mycart.php" style="text-decoration:none;">
                                <span id="mycart"  > My Cart &nbsp; </span>

                                <span class="cart2" >           
                                    <svg class="V3C5bO" width="14" height="14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="_1bS9ic" d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86" fill="#fff"></path></svg>
                                </span>
                                <?php
                                    if(isset($_COOKIE['cart']))
                                    {
                                    $cnt = count(explode(",", $_COOKIE['cart']));
                                    echo "<div style='width:20px; background-color:red; color:white; border-radius:20px; padding-left:6px; margin-left:70px;'>$cnt</div>";
                                    }
                                ?>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="dropdown">
                            <span  class="signin " style="padding-left:30px">
                                <button class="sign_in dropdown-toggle" data-toggle="dropdown" type="button"> <?php
                                    if(isset($_SESSION['uname']))
                                        echo "<label class='text-justify text-primary'> My Account </label> ";
                                    else
                                         echo "<label class='text-justify text-primary'> Sign In </label> ";

                                ?><span class="caret"></span> </button>
                                <?php
//                                    if(isset($_SESSION['uname']))
//                                        echo "<label class='text-justify text-primary'> My Account </label> ";
//                                    else
//                                         echo "<label class='text-justify text-primary'> Sign In </label> ";

                                ?>
                                
                                <ul class="dropdown-menu">
                                    <?php
                                    if(isset($_SESSION['uname']))
                                    {
                                        echo "<li style='text-align:center; background-color:#446291; color:white'> Welcome $_SESSION[uname] </li>";
                                        echo "<li> <a href='myprofile.php'> Profile </a> </li>";
                                        echo "<li> <a href='change_password.php'> Change Password </a> </li>";
                                        echo "<li> <a href='my_order.php'> My Order </a> </li>";
                                        echo "<li> <a href='logout.php'> Logout </a> </li>";
                                    }
                                    else
                                    {
                                        echo "<li> <a href='Login.php'> Login </a> </li>";
                                        echo "<li> <a href='register.php'> Register </a> </li>";
                                    }
                                    
                                    ?>
                                </ul>
                            </span>
                        </div>
                    </div>

                    <div class="col-sm-1">
                    </div>


                </div>
            </section>


            <nav >
                <span class="nav1">
                    <a href="p_home.php" class="nav2"  style="text-decoration:none;">Home</a>
                </span>

                <span class="dropdown nav1 ">
                    <a class=" dropdown-toggle nav2"  data-toggle="dropdown" href="" style="text-decoration:none;"> Electronics <span class="caret"> </span>  </a>
                    <ul class="dropdown-menu">
                        <li> <a href="mobile.php"> Mobile </a> </li>
                    </ul>
                </span>

                <span class="dropdown  nav1">
                    <a  class=" dropdown-toggle nav2 "  data-toggle="dropdown" href="" style="text-decoration:none;"> Appliances <span class="caret"> </span>  </a>
                    <ul class="dropdown-menu">
                        <li> <a href="television.php"> Television </a> </li>
                    </ul>
                </span>

                <span class="nav1">
                    <a href="contact_us.php"  class="nav2" style="text-decoration:none;">Contacs Us</a>
                </span>

                <span class="nav1">
                    <a href="faq.php"  class="nav2" style="text-decoration:none;">FAQ</a>
                </span>
            </nav>
            
        <div class="login-box">
        <h2>Login</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="u_email" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="u_password" required="">
                <label>Password</label>

                <div class="button-form">

                    <!--<a id="submit" href="#">Submit</a>-->
                    <input  id="submit"  type="submit" name="login" value="Login" >

                    <div id="register">
                        Don't have an account ?<br>
                        <a href="Register.php">Register</a>
                    </div>

                </div>
                </div>
        </form>
        <?php
              echo "$msg";
         ?>
    </div>

<!--            <section class="row">
                <div class="col-sm-12" style="height:520px; background-color: cyan;">

                </div>
            </section>

            

        <footer >
            <span class="fspan" style="font-size: 16px; text-align: center;">&copy; Copy Right Reserved by Deepak Kumar Sahu</span>
            <a href="#" class="copyright">&copy; 2020 | Indian Shop  Association</a>
        </footer>  -->

</div>
</body>
</html>
