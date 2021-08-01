<?php  
session_start();  
?>  
<html>  
<body>  
<?php  
echo "User is: ".$_SESSION["user"];  
?>  
<a href="session3.php">Visit next page</a>  
</body>  
</html>  