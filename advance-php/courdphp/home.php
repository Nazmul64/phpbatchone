<?php
    $user_name=$_REQUEST['user_name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $file =$_FILES['file'];
    $file_name=$file['name'];
    $tmp_name=$file['tmp_name'];
    $file_name =uniqid($file_name)."png";
    if(!empty($file_name)){
        $location="uploads/";
        if(move_uploaded_file($tmp_name,$location.$file_name)){
             header('location:show.php');
        }else{
            echo "not uplod";
        }
    }

    $database_connections=mysqli_connect('localhost','root','','users');
    if(empty($user_name || $email || $password)){
        echo "<span style=color:red;>All Feild is requied</span>";
    }
    if(!$database_connections){
       die('No Connecting'.mysqli_connect_error());
    }
    if($user_name && $email && $password){

   $query="INSERT INTO user_info(file,user_name,email,password)VALUES('$file_name','$user_name','$email','$password')";


   $result=mysqli_query($database_connections,$query);

   if($result==true){
       echo "<span style=color:green;>Data Insert Successfully!</span>";
   }else{
         echo "<span style=color:green;>Data Insert Successfully!</span>";
   }
      } 
?>