<html>
    <head> my php page
</head>
<body>
    <?php
    pre_r($_POST);
    if(isset($_POST['submit']))
    {
        echo "Fisrt name:" .$_POST['firstname'];
        echo "Last name:" .$_POST['firstname'];

    }
    ?>
    <form action="" method="POST">
        
        <p>First name: <input type="text" name="firstname" value=""></p>
        <p>Last name: <input type="text" name="lastname" value=""></p>
        <input type="submit" name="submit" value="submit">
</form>


</body>
</html>
<?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}
?>