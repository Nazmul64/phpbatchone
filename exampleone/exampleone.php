<?php
   echo "<pre>";
   print_r($_POST);
  if(isset($_POST['btn'])){
   $first_number = $_POST['first_number'];
   $last_number = $_POST['last_number'];
   $btn = $_POST['btn'];
   
   if($btn == '+'){
       $result=$first_number + $last_number;
   }else if($btn == '-'){
       $result= $first_number - $last_number;
   }else if($btn == '*'){
       $result= $first_number * $last_number;
   }else if($btn == '/'){
       $result= $last_number != 0 ? $first_number / $last_number : "Cannot divide by zero!";
   }else if($btn == '%'){
       $result= $first_number % $last_number;
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>First Number</td>
                <td><input type="number" name="first_number" value=""></td>
            </tr>
            <tr>
                <td>Last Number</td>
                <td><input type="number" name="last_number" value=">"></td>
            </tr>
            <tr>
                <td>Result</td>
                <td><input type="text" name="result" value="<?php echo $result ?? ''; ?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btn" value="+">
                    <input type="submit" name="btn" value="-">
                    <input type="submit" name="btn" value="*">
                    <input type="submit" name="btn" value="/">
                    <input type="submit" name="btn" value="%">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
