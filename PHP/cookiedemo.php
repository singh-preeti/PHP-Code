<?php  
setcookie("MYCOOKIE", "Preety");  
?>  
<html>  
<body>  
<?php  
if(!isset($_COOKIE["MYCOOKIE"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["MYCOOKIE"];  
}  
?>  
</body>
</html>