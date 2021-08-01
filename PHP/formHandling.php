<html>
    <head> my php page
</head>
<body>
    <?php
    pre_r($_POST);
    pre_r($_GET);
    if(isset($_POST['submit']))
    {
        echo "Fisrt name:" .$_POST['firstname'].'<br  />';
        echo "Last name:" .$_POST['firstname'].'<br />';

    }
    if(isset($_GET['submit']))
    {
        echo "Fisrt name:" .$_GET['firstname'].'<br  />';
        echo "Last name:" .$_GET['firstname'].'<br />';

    }
    ?>
    <form action="" method="GET">
        <div>
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" id="firstname" value="">
        </div>
        <div>
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" id="lastname" value="">
        </div>
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