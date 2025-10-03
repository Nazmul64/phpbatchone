<?php
   echo "<pre>";
   print_r($_POST);
   
   if(isset($_POST['btn'])){
      $result = '';
      $start_number =$_POST['start_number'];
      $ending_number =$_POST['ending_number'];
      $increment_amount =$_POST['increment_amount'];
      for($i=$start_number;$i<=$ending_number; $i+=$increment_amount){
        echo $result.=$i;
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Loop</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Start Number</td>
                <td><input type="number" name="start_number" value="<?php echo $_POST['start_number'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td>Ending Number</td>
                <td><input type="number" name="ending_number" value="<?php echo $_POST['ending_number'] ?? ''; ?>"></td>
            </tr>
                <tr>
                <td>Increment Amount</td>
                <td><input type="number" name="increment_amount" value="<?php echo $_POST['increment_amount'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td>Result</td>
                <td>
                    <textarea name="result" rows="5" cols="30"><?php echo $result ?? ''; ?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btn" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
