<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator-switch.php" method="post">
        First Number: <input type="number" name="num1"> <br>
        OP: <input type="text" name="op"> <br>
        Second Number: <input type="number" name="num2"> 
        <input type="submit">
    </form>

    <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        switch ($op) {
            case "+":
                echo $num1 + $num2;        
                break;
            case "-":
                echo $num1 - $num2;
                break;
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                echo $num1 / $num2;
                break;
            default:
                echo "Invalid operator";
                break;
        }
    ?>


</body>
</html>