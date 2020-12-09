<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayHi(String $name = "User", Int $age = 30){
            echo "Hello $name! Your age is $age!", "<br>";
        }

        function cube(Int $num){
            return pow($num, 3);
        }

        sayHi("Kevin", cube(5));
        sayHi("Patricia");
        echo "<br><br><br><br>";

    ?>
</body>
</html>