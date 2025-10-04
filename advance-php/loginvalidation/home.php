<?php
$user_name = $_REQUEST['user_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$has_password="$2y$25$";
$salt ="fswerwstrrujfghfg45bbcvh22";
$cons=$has_password.$salt;

echo crypt($cons,$password);
echo "<br>";

$password_length = strlen($password);

if ($password_length < 5 || $password_length > 10) {
    header('Location: index.php?test=Your Password is not correct');
    exit;
} else {
    echo "Perfect Password";
}
?>
