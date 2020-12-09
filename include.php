<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "./html/header.html" ?>
    <?php
        $title = "Included header";
        $author = "Myself";
        $wordCount = 400;
        include "./php/article-header.php";
    ?>
    <?php include "./html/footer.html" ?>
</body>
</html>