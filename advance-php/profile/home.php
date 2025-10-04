<?php
  if(isset($_FILES['profile'])){
   $file_name=$_FILES['profile'];
   $name=$file_name['name'];
   $type=$file_name['type'];
   $tmp_name=$file_name['tmp_name'];
   $size=$file_name['size'];
   if(!empty($name)){
       $file_location ='uploads/';
       if(move_uploaded_file($tmp_name,$file_location.$name)){
         echo "file uplods successfully";
        echo "<img src='$file_location$name' width='200' height='200'>";
       }else{
          echo "❌ File upload failed!";
       }
   }else{
     echo "file Not found!";
   }
}

?>