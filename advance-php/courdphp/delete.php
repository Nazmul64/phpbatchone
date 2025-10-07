<?php require 'include/header.php'; ?>

<?php
    $database_connections=mysqli_connect('localhost','root','','users');
    if(!$database_connections){
       die('No Connecting'.mysqli_connect_error());
    }
      $recive =$_REQUEST['id'];
      $profile_file_name =$_REQUEST['profile'];
      $query =" DELETE  FROM user_info WHERE id=$recive";

      $delete_items=mysqli_query($database_connections,$query);
      if($delete_items){
         unlink("uploads/$profile_file_name");
         header('location:show.php?delete');
      }
  ?>
<?php require 'include/footer.php'; ?>