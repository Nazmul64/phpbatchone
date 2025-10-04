<!-- Header -->
<?php require 'include/header.php'; ?>

<div class="container my-5 text-center">
    <form action="home.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
        <div class="mb-3">
            <input type="file" name="profile" class="form-control" placeholder="Enter Your file">
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="submit" class="btn btn-primary w-100">
        </div>
    </form>
</div>

<!-- Footer -->
<?php require 'include/footer.php'; ?>
