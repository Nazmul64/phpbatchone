<?php require 'include/header.php'; ?>
<a href="index.php" class="btn btn-success">Index Pages</a>

<?php
$database_connections = mysqli_connect('localhost', 'root', '', 'users');
if (!$database_connections) {
    die('No Connecting' . mysqli_connect_error());
}

// Handle multiple delete
if (isset($_POST['delete_multiple'])) {
    if (!empty($_POST['checkbox_data'])) {
        $check_data = $_POST['checkbox_data'];
        $all_mark = implode(",", $check_data);
        $delete_query = "DELETE FROM user_info WHERE id IN ($all_mark)";
        $delete_result = mysqli_query($database_connections, $delete_query);

        if ($delete_result) {
            echo '<div class="alert alert-success text-center" role="alert">Selected records deleted successfully!</div>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">Error deleting data!</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center" role="alert">Please select at least one record to delete!</div>';
    }
}

// Search functionality
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM user_info WHERE user_name LIKE '%$search%'";
} else {
    $query = "SELECT * FROM user_info";
}

$result_query = mysqli_query($database_connections, $query);
$count = mysqli_num_rows($result_query);

if ($count == 0) {
    echo '<div class="alert alert-danger text-center" role="alert">No Data found in database</div>';
}
?>

<div class="container my-5 text-center">
  <form action="show.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
    <div class="input-group">
      <span class="input-group-text bg-primary text-white">
        <i class="fas fa-search"></i>
      </span>
      <input type="text" name="search" class="form-control" placeholder="Search anything...">
      <button type="submit" name="submit" class="btn btn-primary">
        Search
      </button>
    </div>
  </form>
</div>

<form action="" method="post">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Profile Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th>Gendar</th>
      <th>Country</th>
      <th scope="col">Action</th>
      <th><input type="submit" name="delete_multiple" class="btn btn-success" value="Delete Multiple Data"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  $serial = 0;
  while ($rows = mysqli_fetch_assoc($result_query)) {
      $serial++;
      $profile = $rows['file'] ?: 'profile.png';
  ?>
    <tr>
      <th scope="row"><?php echo $serial; ?></th>
      <td><img src="uploads/<?php echo htmlspecialchars($profile); ?>" width="100"></td>
      <td><?php echo htmlspecialchars($rows['user_name']); ?></td>
      <td><?php echo htmlspecialchars($rows['email']); ?></td>
      <td><?php echo htmlspecialchars($rows['password']); ?></td>
      <td><?php echo htmlspecialchars($rows['gender']); ?></td>
      <td><?php echo htmlspecialchars($rows['country']); ?></td>
      <td>
        <a href="single_edit.php?edit_id=<?php echo $rows['id']; ?>" class="btn btn-success">Edit</a> ||
        <a href="delete.php?id=<?php echo $rows['id']; ?>&profile=<?php echo $profile; ?>" class="btn btn-danger">Delete</a>
      </td>
      <td class="text-center">
        <input type="checkbox" name="checkbox_data[]" value="<?php echo $rows['id']; ?>">
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</form>

<?php require 'include/footer.php'; ?>
