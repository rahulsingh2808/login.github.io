<?php
    if(isset($_COOKIE['email'])and isset($_COOKIE['password']))
    {
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
    }
?>
    <style type ="text/css">
        body {
  background-image: url("https://www.parallels.com/blogs/ras/app/uploads/2021/03/virtual-learning-environment.jpg");
  background-size: 100% 100%;

}

        <th>
        {
            text-align:right;
        }
        <h3>
        {
        text-align:center;
        }
    </style>

<table cellpadding="5" cellspacing="10" align="center">
    <form method="post" action="validation.php">
        <tr><th>Email</th></tr><td><input type="text" name ="email" ></td></tr>
        <tr><th>Password</th></tr><td><input type="password" name="password"></td></tr>
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
        <tr><td clospan="2" align="right" ><input type="Submit" value="Login" name="login"></td></tr>
    </form>
</table>

