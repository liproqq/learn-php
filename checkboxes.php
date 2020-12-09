<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        Apple: <input type="checkbox" name="fruits[]" value="apples"><br>
        Banana: <input type="checkbox" name="fruits[]" value="bananas"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>
</body>
</html>