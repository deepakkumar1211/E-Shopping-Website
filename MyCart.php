
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Cart</title>
    </head>
    <body>
        <?php
        include './Header.php';
        ?>
        
        <div class="row">
            <div class="col-sm-12" style="height: 520px">
                <?php
                    if(isset($_COOKIE['cart']))
                    {
                        $id = $_COOKIE['cart'];
                        echo "<center><h1>Cart Items</h1></center>";
                        $link = mysqli_connect("localhost", "root", "", "eshopdb");
                        $qry = "select * from productmaster where pid in ($id)";
                        $result = mysqli_query($link, $qry);
                        echo "<table class='table hovered'>";
                                echo "<tr>";
                                    echo "<th>Model No</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Price</th>";
                                    echo "<th></th>";
                                    echo "<th></th>";
                                echo "</tr>";
                                $total = 0;
                        while ($r = mysqli_fetch_array($result))
                        {
                            $total += $r[2];
                            $_SESSION['amount'] = $total;
                            echo "<tr>";
                                echo "<td>$r[0]</td>";
                                echo "<td>$r[1]</td>";
                                echo "<td>$r[2]</td>";
                                echo "<td><img src='$r[4]' width='40' height='40' /></td>";
                                echo "<td><a class='btn btn-danger' href='remove.php?pid=$r[0]' >Remove</a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<hr>";
                        echo "<h3 style='text-align:right; padding-right:250px' >Total Amount : $total </h3>";
                        echo "<hr>";
                        echo "<div class='text-right'><a  class='btn btn-primary '  href='shipping1.php' style='margin-right:250px'> Place Order </a></div>";

                    }
                    else
                        echo "<center><h1 style='color:tomato; padding-top:50px;'>No Product Added Yet !!!</h1></center>";
                ?>
            </div>
        </div>
        
        <?php
        include './Footer.html';
        ?>
    </body>
</html>
