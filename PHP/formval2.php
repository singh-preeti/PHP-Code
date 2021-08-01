<?php
if(isset($_GET['submit'])){
    $username = $_GET['username'];
    $passwors =  $_GET['password'];
    if(strlen($username) <=8)
    {
        echo "username should be at least 8 character";
    }
    else{
        echo "show the error";
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta chaeset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>form validation</title>
</head>
<body>
    <form action="" method="GET">
        username : <input type="text" name="username" ><br><br>
        password : <input type="text" name="password" ><br><br>
        <input type="submit" value="submit" name="submit">
</form>
</body>
</html>