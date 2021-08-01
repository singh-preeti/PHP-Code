<?php
if($_SERVER['REQUEST_METHOD']=="post"){
if(empty($_POST['username']))
{
    $username_error = "Please enter the username";

}
if(empty($_POST['password']))
{
    $password_error = "Please enter the password";
}
}
?>
<DOCTYPE HTML>
    <html>
        <head>
            <title>Form Validation in php</title>
        </head>
        <body>
            <form method="post" action="" auto_complete="off">
                <input type="text" name="usename" id="">
                <span><?php if(isset($username_error)) echo $username_error; ?></span>
                <input type="password" name="password" id="">
                <span><?php if(isset($password_error)) echo $password_error; ?></span>
                <input type="submit" value="register" id="">
</body>
</html>