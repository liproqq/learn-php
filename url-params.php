<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="input.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
        echo $_GET["name"], "<br>";
        echo $_GET["age"], "<br>";
    ?>

</body>
</html>