<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="madlibs.php" method="get">
        Color: <input type="text" name="color">
        Plural: <input type="text" name="plural">
        Celeb: <input type="text" name="celeb">
        <input type="submit">
    </form>
    
    <?php
        $color = $_GET["color"];
        $plural = $_GET["plural"];
        $celeb = $_GET["celeb"];

        echo "Roses are $color <br>";
        echo "$plural are blue <br>";
        echo "I love $celeb <br>";
    ?>

</body>
</html>