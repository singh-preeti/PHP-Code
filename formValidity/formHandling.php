<html>

<head><title>My PHP Form</title> </head>


<body>
    <?php 
    pre_r($_POST);
    pre_r($_GET);
    pre_r($_REQUEST);
    if(isset($_POST['submit'])){ //post form is submitted
        echo "First Name".$_POST['firstname'].'</br>';
        echo "Last Name".$_POST['lastname'].'</br>';
    }
    if(isset($_GET['submit'])){ //post form is submitted
        echo "First Name".$_GET['firstname'].'</br>';
        echo "Last Name".$_GET['lastname'].'</br>';
    }
    ?>
    <form action="" method="POST">
      <p> First Name: <input type="text" name="firstname" value=""></p>
      <p> Last Name:  <input type="text" name="lastname" value=""></p>
        <input type="submit" name="submit" value="submit">
</body>
</html>
<?php
  function pre_r($array){

    echo '<pre>';
    print_r($array);
    echo '<pre>';
  }
?>