<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Chef {
            function makeChicken(){
                echo "Chef is making chicken <br>";
            }
            function makeSandwich(){
                echo "Chef is making a sandwich <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta(){
                echo "Chef is making pasta <br>";
            }
        }


        $chef = new Chef();
        $chef->makeChicken();
        $italianChef = new ItalianChef();
        $italianChef->makePasta();
    ?>
</body>
</html>