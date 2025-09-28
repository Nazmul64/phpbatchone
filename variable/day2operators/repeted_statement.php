<?php
    // for($i=1; $i<=10; $i++){
    //     echo "Hello World <br>";
    // }

    //  for($i=1; $i<=10; $i++){
    //    echo $i."<br/>";
    // }


    //  for($i=10; $i>=1; $i--){
    //     echo $i."<br/>";
    // }



    // statements

    // $a=10;
    // $b=20;

    // if($a>$b){
    //     echo "A is Greater Than B";
    // }else if($a<$b){
    //     echo "B is Greater Than A";
    // }
    // else{
    //     echo "The statement not true";
    // }



    // and or operator


    // $a=10;
    // $b=20;
    // if($a==10 && $b==20){
    //     echo "The statement is true";
    // }else{
    //     echo "The statement is false";
    // }
    // $a=10;
    // $b=20;
    // if($a==10 || $b==30){
    //     echo "The statement is true";
    // }else{
    //     echo "The statement is false";
    // }






echo '<pre/>';
print_r($_POST);

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
echo $first_name.''.$last_name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="#" method="POST">
        <input type="text" name="first_name" placeholder="Enter Your first name"><br>
        <input type="text" name="last_name" placeholder="Enter Your last name"><br>
        <input type="submit" value="Login">
     </form>
</body>
</html>