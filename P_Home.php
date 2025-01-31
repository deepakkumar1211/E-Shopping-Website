<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Shoping</title>
        <!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->

        <link rel="stylesheet" type="text/css" media="all" href="P_Home.css">

        <script>
            arr = new Array("images/offer1.jpg","images/offer2.jpg","images/offer3.jpg");
            i = 0;
            function ChangeImage()
            {
                if(i<3)
                {
                    document.images[1].src=arr[i];
                    i++;
                }
                else
                    i = 0;
            }
            function StartSlider()
            {
                setInterval(ChangeImage,2000);
            }
        </script>

    </head>
    <body onload="StartSlider()">
        <div class="container-fluid" style="padding:0px">
            <?php
            include './Header.php';
            ?>

            <div class="row">
                <div class="col-sm-1"> </div>   
                <div class="col-sm-10">
                    <a href="mobile.php"><img src="images/offer1.jpg" width="100%" height="500px" /></a>
                </div>
                <div class="col-sm-1"> </div>   
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <?php
                        $link = mysqli_connect("localhost", "root", "", "eshopdb");
                        $result = mysqli_query($link, "select * from productmaster where ptype = 'mobile' limit 4");
                        if (mysqli_num_rows($result) > 0) {
                            $cnt = 0;
                            while ($r = mysqli_fetch_array($result)) {
                                if ($cnt == 0)
                                    echo "<div class='row' style='padding-top:30px'>";
                                echo "<div class='col-sm-3'>";
                                echo "<div class='row'>";
                                echo "<div class='col-sm-12'>";
                                echo "<center><a href='mobile_des.php?id=$r[0] '><img src='$r[4]' wigth='100px' height='200px'></a><center>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='row'>";
                                echo "<div class='col-sm-12'>";
                                echo "<center><b>$r[1]</b><center>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='row'>";
                                echo "<div class='col-sm-12'>";
                                echo "<center><b>Price : $r[2]</b><center>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                $cnt++;
                                if ($cnt == 4) {
                                    echo "</div>";
                                    $cnt = 0;
                                }
                            }
                        } else {
                            echo "";
                        }
                        mysqli_close($link);
                        ?>
                    </div>
                </div>
            </div><br>
            
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <?php
                        $link = mysqli_connect("localhost", "root", "", "eshopdb");
                        $result = mysqli_query($link, "select * from productmaster where ptype = 'television' limit 4");
                        if (mysqli_num_rows($result) > 0) {
                            $cnt = 0;
                            while ($r = mysqli_fetch_array($result)) {
                                if ($cnt == 0)
                                    echo "<div class='row' style='padding-top:30px'>";
                                echo "<div class='col-sm-3'>";
                                echo "<div class='row'>";
                                echo "<div class='col-sm-12'>";
                                echo "<center><a href='television_des.php?id=$r[0] '><img src='$r[4]' wigth='100px' height='200px'></a><center>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='row'>";
                                echo "<div class='col-sm-12'>";
                                echo "<center><b>$r[1]</b><center>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='row'>";
                                echo "<div class='col-sm-12'>";
                                echo "<center><b>Price : $r[2]</b><center>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                $cnt++;
                                if ($cnt == 4) {
                                    echo "</div>";
                                    $cnt = 0;
                                }
                            }
                        } else {
                            echo "";
                        }
                        mysqli_close($link);
                        ?>
                    </div>
                </div>
            </div>
            
            <br><br>

            <footer>
                <span class="fspan" style="font-size: 16px; text-align: center;">&copy; Copy Right Reserved by EasyDay</span>
                <a href="#" class="copyright">&copy; 2022</a>
            </footer>

        </div>
    </body>
</html>


