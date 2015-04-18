<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/layout.css");
            @import url("css/skeleton.css");
        </style>
    </head>

    <body>
        <!-- Primary Page Layout -->

        <div class="container">

            <div class="form-bg">
                <form role="form" method="post" action="include/login.inc.php">
                    <h2>Login</h2>
                    <p><input type="text" placeholder="Username" name="username"></p>
                    <p><input type="password" placeholder="Password" name="password"></p>
                    <label for="remember">
                        <input type="checkbox" id="remember" value="remember" />
                        <span>Remember me on this computer</span>
                    </label>
                    <button class="login" type="submit"></button>
                </form>
            </div>


            <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


        </div><!-- container -->

        <!-- JS  -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
        <script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
        <script src="js/app.js"></script>

        <!-- End Document -->
    </body>
</html>
