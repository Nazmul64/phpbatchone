<?php
   echo "<pre>";
   print_r($_POST);
   
   $result = '';
   if(isset($_POST['btn'])){
      $start_number = $_POST['start_number'];
      $ending_number = $_POST['ending_number'];

      for($i = $start_number; $i <= $ending_number; $i++){
         $result.= $i . " "; 
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
                <td>Result</td>
                <td><textarea type="text" name="result" value=""><?php echo $result ?? ''; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btn" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
