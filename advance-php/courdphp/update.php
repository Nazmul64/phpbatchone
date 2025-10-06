
<?php require 'include/header.php'; ?>
<?php
        $database_connection = mysqli_connect('localhost', 'root', '', 'users');
        if (!$database_connection) {
            die('No Connect: ' . mysqli_connect_error());
        }

        if(isset($_REQUEST['submit'])){
            $user_name=$_REQUEST['user_name'];
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            $update_id=$_REQUEST['updating_id_hidden'];
      
            $query="UPDATE user_info SET user_name='$user_name',email='$email',password='$password' WHERE id=$update_id";

            $final_query =mysqli_query($database_connection,$query);
            if($final_query){
                header('location:show.php?update');
            
        }
    }
?>
<?php require 'include/footer.php'; ?>


