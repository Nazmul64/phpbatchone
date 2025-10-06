<!-- Header -->
<?php require 'include/header.php'; ?>
<?php
   $database_connections=mysqli_connect('localhost','root','','users');
    if(!$database_connections){
       die('No Connecting'.mysqli_connect_error());
    }

     if(isset($_REQUEST['edit_id'])){
        $recived_id =$_REQUEST['edit_id'];
        $query ="SELECT  * FROM user_info WHERE id=$recived_id";

        $result_show =mysqli_query($database_connections,$query);
?>

<?php
        while($row=mysqli_fetch_assoc($result_show)){
           $db_id=$row['id'];
           $name=$row['user_name'];
           $email=$row['email'];
           $password=$row['password'];
        }
        ?>
        <div class="container my-5 text-center">
            <form action="update.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
                <div class="mb-3">
                    <input type="text" name="user_name" value="<?php echo $name ?? ''?>" class="form-control" placeholder="Enter Your user name">
                </div>
                <div class="mb-3">
                    <input type="email" name="email"  value="<?php echo $email ?? ''?>"class="form-control" placeholder="Enter Your email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" value="<?php echo $password ?? ''?>" class="form-control" placeholder="Enter Your password">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="updating_id_hidden" value="<?php echo  $db_id?>" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
        
<?php } ?>




<!-- Footer -->
<?php require 'include/footer.php'; ?>
