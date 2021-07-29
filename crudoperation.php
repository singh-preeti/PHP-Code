<!DOCTYPE html>
<html>
<head>

   
<title>PHP CRUD</title>
<script src="http://code.jquery.com/jquery-2.13.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>    
    <body>
        <?php require_once 'process.php';?>

        <?php
          if(isset($_SESSION['message'])):
         ?>
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
        <?php endif?>

        <div class="Container">
        <?php 
       $connection = new mysqli('localhost', 'root', '','crud')or die(mysqli_error($mysqli));
        $result = $connection->query("SELECT * from data") or die($mysqli->error);
        ?>
      <!-- //pre_r($result);
        //pre_r($result->fetch_assoc());
        //pre_r($result->fetch_assoc());
       // pre_r($result->fetch_assoc()); -->
       
       
     <div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
            </tr>
</thead>
<?php 
while($row = $result->fetch_assoc()):
?>
<tr>
<td><?php echo $row['Id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['location']; ?></td>

<td>
    <a href="crudoperation.php?edit=<?php echo $row['Id']; ?>"
    class = "btn btn-info">Edit</a>
    <a href="process.php?delete=<?php echo $row['Id']; ?>"
    class = "btn btn-danger">Delete</a>
</td>
</tr>
<?php endwhile;?>
</tabel>
</div>
<?php
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>
    <div class="row" justify-content-center>
<form action="process.php" method="POST">
    
    <input type="hidden" name="id" value="<?php echo $id;?>" >
    <div class="form-group">
        <label class="menue">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name;?>"  placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="<?php echo $location;?>"  placeholder="Enter your location">
    </div>
    <div class="form-group">
        <?php
        if($update == true):
        ?>
        <button type="submit" name="update" class="btn btn-info">Update</button>
        <?php else: ?>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <?php endif; ?>
    </div>  
</form>
</div>
    </div>
    </body>
    </html>