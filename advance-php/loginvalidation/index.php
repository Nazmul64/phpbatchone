<!-- Header -->
<?php require 'include/header.php'; ?>

<div class="container my-5 text-center">
    <form action="home.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
        <div class="mb-3">
            <input type="text" name="user_name" class="form-control" placeholder="Enter Your user name">
        </div>
         <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Enter Your email">
        </div>
         <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Enter Your password">
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="submit" class="btn btn-primary w-100">
        </div>
    </form>
</div>

<?php
   if(isset($_REQUEST['test'])){
     echo $_REQUEST['test'];
   }
?>

<!-- Footer -->
<?php require 'include/footer.php'; ?>
