
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobiles</title>
<!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

        <style>
            #contain{
                position: sticky;
                top: 0px;
                z-index: 10;
}
        </style>

    </head>
    <body>
        <div class="container-fluid">
            
            <div id="contain">
                 <?php
                 include './Header.php';
              ?>
            </div >
        
        <div>
            <?php
            $link = mysqli_connect("localhost","root","","eshopdb");
            $result = mysqli_query($link, "select * from productmaster where ptype = 'mobile' ");
            if(mysqli_num_rows($result)>0)
            {
                $cnt = 0;
                while($r = mysqli_fetch_array($result))
                {
                    if($cnt == 0)
                        echo "<div class='row' style='padding-top:30px'>";
                    echo "<div class='col-sm-3'>";
                            echo "<div class='row'>";
                                    echo "<div class='col-sm-12'>";
                                    echo "<center><a href='mobile_des.php?id=$r[0] '><img src='$r[4]' wigth='150px' height='300px'></a><center>";
                                    echo "</div>";
                            echo "</div><br>";
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
                    $cnt ++;
                    if($cnt == 4)
                    {
                        echo "</div>";
                        $cnt =0;
                    }
                        
                }
            }
            else
            {
                echo "<center><h2>No Product Found !!!!</h2></center>";
            }
            mysqli_close($link);
            ?>
        </div><br>
        
        
        
        <?php
            include './Footer.html';
        ?>
        </div>
    </body>
    </html>