<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '','crud')or die(mysqli_error($mysqli));
$id =0;
$update= false;
$name = '';
$location = '';
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli ->query("INSERT INTO data(name,location)VALUES('$name','$location')")or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved !";
    $_SESSION['msg_type'] = "success";

    header("location: crudoperation.php");
}
if(isset($_GET['delete']))
{
    $id= $_GET['delete'];
    $mysqli->query("DELETE FROM  data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted !";
    $_SESSION['msg_type'] = "success";

    header("location: crudoperation.php");
}
if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
   $result =  $mysqli->query("SELECT * FROM  data WHERE Id=$id") or die($mysqli->error());
   if($result->num_rows == 1)
   {
       $row = $result -> fetch_array();
       $name = $row['name'];
       $location = $row['location'];
   }
}
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("UPDATE data SET name='$_POST[name]', location='$_POST[location]'  WHERE Id=$id") 
    or die($mysqli->error());

    $_SESSION['message'] = "Record has been Updated";
    $_SESSION['msg_type'] = "Warning";

    header('location: crudoperation.php');
}


?>