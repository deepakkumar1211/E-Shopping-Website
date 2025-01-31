<?php
        $id = $_GET['eid'];
        $link = mysqli_connect("localhost","root","","eshopdb");
        $qry = "select*from usermaster where user_email='$id' ";
        $res = mysqli_query($link, $qry);
        if(mysqli_num_rows($res)==0)
            echo " <font color='green'> Available </font>";
        else 
            echo " <font color='red'> Already Exist Please Register with Another Email !!!  </font> " ;
        mysqli_close($link);
        ?>