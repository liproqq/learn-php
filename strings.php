<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $quote = "I made this";
        echo strtolower($quote), "<br>";
        echo strlen($quote), "<br>";
        $quote[4] = "b";
        echo $quote, "<br>";
        echo str_replace("this", "all of this", $quote), "<br>";
        echo substr($quote, 2, 4);
    ?>
</body>
</html>