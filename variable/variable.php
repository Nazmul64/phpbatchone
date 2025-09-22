<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <h1>Variable</h1>
    <?php
        $name = "John Doe";
        $age = 30;
        $is_student = false;

        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Is Student: " . ($is_student ? "Yes" : "No") . "</p>";
    ?>
</body>
</html>