<?php require 'include/header.php'; ?>
   <?php
    $database_connections=mysqli_connect('localhost','root','','users');
    if(!$database_connections){
       die('No Connecting'.mysqli_connect_error());
    }
    $query ="SELECT * FROM user_info";
      $result_query=mysqli_query($database_connections,$query);
      $count =mysqli_num_rows($result_query);
        if($count>0 && isset($_REQUEST['delete'])){
            echo '<div class="alert alert-danger" role="alert">Data deleted successfully</div>';
        }else if($count == 0 ){
              echo '<div class="alert alert-danger text-center" role="alert">No Data show in our database</div>';
        }
  ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
       $serial =0;
        while($rows=mysqli_fetch_assoc($result_query)){
              $db_id=$rows['id'];
              $name=$rows['user_name'];
              $email=$rows['email'];
              $password=$rows['password'];
              $serial++;
?>
    <tr>
      <th scope="row"><?php echo $serial?></th>
      <td><?php echo htmlspecialchars($name)?></td>
      <td><?php echo htmlspecialchars($email)?></td>
      <td><?php echo htmlspecialchars($password)?></td>
      <td>
        <a href="single_edit.php?edit_id=<?php echo $rows['id'] ?>" class="btn btn-success">Edit</a>
        ||
        <a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger"
       onclick="return confirm('Are you sure you want to delete this record?');">
       Delete
    </a>
      </td>
</td>
    </tr>
    
      <?php } ?>

   </tbody>
</table>
<?php require 'include/footer.php'; ?>
