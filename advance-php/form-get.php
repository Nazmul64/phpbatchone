<!-- Header -->
<?php require 'include/header.php'; ?>

<div class="container my-5 text-center">
    <form action="home.php" method="get" class="w-50 mx-auto">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Enter Your User Name" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
        </div>
    </form>
</div>

<!-- Footer -->
<?php require 'include/footer.php'; ?>
