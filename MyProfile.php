<?php
        session_start();
        if(!isset($_SESSION['uname']))
        {
            header("location:login.php");
        }
?>
<!DOCTYPE html>
<html>
    <head>
         <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Profile</title>
    </head>
    <body>
        <?php
        include './Header.php';
        ?>
        
        <div class="row" style="height: 520px">
            
            <div class="col-sm-4" style="height: 520px"></div>
            
            <div class="col-sm-4" style="height: 520px">
                <?php
                    if(isset($_SESSION['uname']))
                    {
                        $user_id = $_SESSION['uid'];
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
            
             <div class="col-sm-4" style="height: 520px"></div>
            
        </div>
        
        <?php
        include './Footer.html';
        ?>
    </body>
</html>
