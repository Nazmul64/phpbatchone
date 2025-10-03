<?php
  echo "Database save information";
  echo "<br>";
  echo $dbusername="Nazmul";
  echo "<br>";
  echo $databaseemail="nazmul@gmail.com";
  echo "<br>";
  echo "<hr>";


  echo "Dabase Name Is = ".' '. $username =$_REQUEST['username'];
  echo "<br>";
  echo "Database email is =".' '. $email =$_REQUEST['email'];
  echo "<hr>";


if ($dbusername == $username && $databaseemail == $email) {
    echo "<span style='color:green;'>Your Login Successfully Done</span> <br>";
} else {
    echo "<span style='color:red;'>Login Failed</span>";
}

?>