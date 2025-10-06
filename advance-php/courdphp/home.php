<?php
    $user_name=$_REQUEST['user_name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $database_connections=mysqli_connect('localhost','root','','users');
    if(empty($user_name || $email || $password)){
        echo "<span style=color:red;>All Feild is requied</span>";
    }
    if(!$database_connections){
       die('No Connecting'.mysqli_connect_error());
    }
    if($user_name && $email && $password){

   $query="INSERT INTO user_info(user_name,email,password)VALUES('$user_name','$email','$password')";


   $result=mysqli_query($database_connections,$query);

   if($result==true){
       echo "<span style=color:green;>Data Insert Successfully!</span>";
   }else{
         echo "<span style=color:green;>Data Insert Successfully!</span>";
   }
      } 
?>