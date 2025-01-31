<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
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

        </style>
        
    </head>
    <body style="background-color: green">
        <div class="col-sm-5 search1">
                        <form class="search2 header-form-search" action="/search" method="GET">
                            <div class="col-12-12 search3">
                                <div class="search4">
                                    <input class="search5" type="text" title="Search for products, brands and more" name="q" autocomplete="off" placeholder="Search for products, brands and more" value="">
                                </div>
                                <button class="search6" type="submit">
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
        
         <div class="col-sm-1">
                        <div class="cart1">
                            <a  class="amcart"  href="" style="text-decoration:none;">
                                <span id="mycart"  > My Cart &nbsp; </span>

                                <span class="cart2" >           
                                    <svg class="V3C5bO" width="14" height="14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="_1bS9ic" d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86" fill="#fff"></path></svg>
                                </span>
                            </a>
                        </div>
                    </div>
        
          <div class="col-sm-1">
                        <div class="dropdown">
                            <span  class="signin " >
                                <button class="sign_in dropdown-toggle" data-toggle="dropdown" type="button"> Sign In<span class="caret"></span> </button>



                                <ul class="dropdown-menu">
                                    <li> <a href="#"> Profile </a> </li>
                                    <li> <a href="#"> Change Password </a> </li>
                                    <li> <a href="#"> My Order </a> </li>
                                    <li> <a href="#"> Logout </a> </li>
                                    <li> <a href="#"> Login </a> </li>
                                    <li> <a href="register.php"> Register </a> </li>
                                </ul>
                            </span>        
                        </div>
                    </div>
    </body>
</html>
