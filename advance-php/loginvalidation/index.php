<!-- Header -->
<?php require 'include/header.php'; ?>

<style>
.error { color: #FF0000; }
</style>

<?php
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["user_name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["user_name"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
}

// Sanitize function
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="container my-5 text-center">
    <form action="home.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
        <div class="mb-3 text-start">
            <input type="text" name="user_name" class="form-control" placeholder="Enter Your Username" value="<?php echo htmlspecialchars($name ?? ''); ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>

        <div class="mb-3 text-start">
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo htmlspecialchars($email ?? ''); ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <div class="mb-3 text-start">
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>

        <div class="mb-3">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
        </div>
    </form>
</div>

<?php require 'include/footer.php'; ?>
