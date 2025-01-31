<!DOCTYPE html>
<html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
<!--            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
            <style>
/*                *{
                    box-sizing: border-box;
                    list-style: none;
                    margin: 0px;
                }

                body{
                    margin: 0px;
                }*/
                .maindiv{
                    padding: 0px;
                    text-decoration: none;
                }
                header{
                    background-color: #614983;
                    height: 100px;
                    position: -webkit-sticky;
                    /*position: sticky;*/
                }
                .eap{
                    display: inline-block;
                    font-size: 40px;
                    font-family: new times roman;
                    color:white;
                    padding: 20px 40px;

                }
                .macct{
                    float: right;
                    font-size: 19px;
                    color: white;
                    padding-right: 70px;
                    padding-top: 65px;
                    background-color:  #614983;
                }
                #myacnt{
                    text-decoration: none;
                    color: white;
                    display: inline-block;
                }
                #myacnt:hover{
                    color: greenyellow;
                }

            </style>

        </head>
        <body style="margin:0px;">

                <header>
                    <span  > 
                        <div class="eap" > Eshop Admin Panel </div>
                    </span>


                    <div class="dropdown macct">
                        <a  id="myacnt" class=" dropdown-toggle" data-toggle="dropdown" href=""> <?php
                                    if(isset($_SESSION['admin']))
                                    {
                                        echo " My Accounts <span class='caret'> </span> ";
                                    }
                                    else
                                    {
                                         echo "";
                                    }
                                    ?> </a>


                        <ul class="dropdown-menu">
                            <?php
                                    if(isset($_SESSION['admin']))
                                    {
                                        echo "<li> <a href='admin_profile.php'> Profile </a> </li>";
                                        echo " <li> <a href='admin_logout.php'> Logout </a> </li>";
                                    }
                                    else
                                    {
                                    echo "";
                                    }
                                    ?>
                        </ul>
                    </div>

                </header>

        </body>
    </html>
