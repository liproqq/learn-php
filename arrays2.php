<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arrays2.php" method="get">
        <input type="text" name="student" id="">
        <input type="submit">

    </form>

    <?php
        $grades = array("Jenny"=>"A+", "Patti"=>"1+", "Justin"=>"5");
        echo $grades[$_GET["student"]];


    ?>
</body>
</html>