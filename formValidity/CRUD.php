<html>
    <head><title>Create Read Update Delete PHP Operation</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php require_once 'process1.php'; ?>

        <?php
            if(isset($_SESSION['message'])):
        ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
           // unset( $_SESSION['msg_type']);
        ?>
        </div>
            <?php endif ?>
        <div class="Container">
        <?php 
            $mysqli = new mysqli('localhost','root','','india-mart') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
            //pre_r($result);
            //pre_r($result ->fetch_assoc());
           

            function pre_r($array){
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php 
                   while($row =  $result ->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo  $row['name']; ?></td>
                    <td><?php echo  $row['location']; ?></td>
                    <td>
                        <a href="CRUD.php?edit=<?php echo $row['Id'];?>"
                         class= "btn btn-info">Edit</a>
                         <a href="CRUD.php?delete=<?php echo $row['Id'];?>"
                         class= "btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
         </div>
        <div class="row justify-content-center" >
        <form action="" method="POST">
            <div class="form-group">
                <label>Name </label>
                <input type="text" name="name"  class="form-control" value="<?php echo $name;?>" placeholder="Enter your name">
            </div>
            <div class="form-group">
                 <label> Location</label>
                <input type="text" name="location" class="form-control" value="<?php echo $location;?>" placeholder="Enter the location">
            </div>
           
            <div class="form-group">
        <?php 
          if ($update == true):
        ?>
        <button type="submit" name="update" class="btn btn-info">Update</button>
         <?php else: ?>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <?php endif;?>
    </div>  
        </div>
        </form>
     </div>    
</body>
</html>