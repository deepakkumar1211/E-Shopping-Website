<?php
session_start();
if(!isset($_SESSION['uname']))
{
    header("location:login.php?page=shipping.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Order </title>
    </head>
    
    <body style="background-image: linear-gradient(to left, cyan,yellow,lawngreen,cornflowerblue">
        <?php
        include './Header.php';
        ?>

        <!--Content-->
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <form method="post" style="padding-top:20px;" action="order1.php">

                        <div class="jumbotron" style="background-color: pink;">

                            <lable style="font-size:25px;padding-left: 120px; color:#330bd6; font-family: new times roman"> !!! Welcome To Shipping Page  !!!</lable>

                            <div class="form-group">
                                <label for=""> Name :</label>
                                <input type="text" name="name" id="" class="form-control" required="" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="">Email ID :</label>
                                <input id="t2" type="email" name="email"  class="form-control" required="" placeholder="Enter Email">
                                <div id="d1"></div>
                            </div>

                            <div class="form-group">
                                <label for="">Mobile Number :</label>
                                <input type="number" name="mobile" id="" class="form-control" required="" placeholder="Enter Mobile Number">
                            </div>

                            <div class="form-group">
                                <label for="">Address :</label>
                                 <textarea name='address' id='address' class="form-control" name='address' required placeholder="Enter Address"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">State :</label>
                                <input type="text" name="state" id="" class="form-control" required="" placeholder="Enter State" />
                            </div>

                            <div class="form-group">
                                <label for="">country :</label>
                                <input type="text" name="country" id="" class="form-control" required="" placeholder="Enter Country" />
                            </div>

                            <div class="form-group">
                                <label for="">Pincode :</label>
                                <input type="number" name="pincode" id="" class="form-control" required="" placeholder="Enter Pincode" />
                            </div>

<!--                            <div class="form-group">
                                <div><label for="">Payment Method :</label></div>
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="payment" value="credit/debit" required=""><label for=""> &nbsp; Credit/Debit Card</label>
                                </div>

                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="payment" value="netbanking" required><label for=""> &nbsp; Net Banking </lable>
                                </div>
                                
                                <div style="padding-left:70px; display: inline">
                                    <input type="radio" name="payment" value="cash_on_delivery" required><label for=""> &nbsp; Cash on delivery </lable>
                                </div>
                            </div>-->

                              <div class="form-group">
                                          <label for="">Payment Method :</label>
                                          <select name="payment" id="" class="form-control" required="">
                                              <option value="cash on delivery">Cash on delivery</option>
                                               <option value="credit/debit card">Credit/Debit Card</option>
                                               <option value="netbanking">Net Banking</option>
                                            </select>
                                   </div>

                            <input type="submit" name="shipped" value="Place Order" class="btn btn-success">

                            <input type="reset" name="reset" value="Reset" class="btn btn-warning">

                        </div>

                    </form>

                </div>

                <div class="col-sm-4">
                </div>

            </div>
        </div>

    </body>
</html>
