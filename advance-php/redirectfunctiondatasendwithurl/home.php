<?php
echo $uer_name =$_REQUEST['username'];
$password =$_REQUEST['password'];


if($uer_name=='google'){
   header("Location:show.php?text=$uer_name");
}

// if($uer_name=='google'){
//    header("Location: https://www.google.com");
// }elseif($uer_name=='facebook'){
//  header('location:https://www.facebook.com');
// }else{
//   echo "Not Fount!";   
// }

?>