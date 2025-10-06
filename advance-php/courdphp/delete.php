<?php require 'include/header.php'; ?>

<?php
    $database_connections=mysqli_connect('localhost','root','','users');
    if(!$database_connections){
       die('No Connecting'.mysqli_connect_error());
    }
      $recive =$_REQUEST['id'];
      $query =" DELETE  FROM user_info WHERE id=$recive";

      $delete_items=mysqli_query($database_connections,$query);
      if($delete_items){
         header('location:show.php?delete');
      }
  ?>
<?php require 'include/footer.php'; ?>