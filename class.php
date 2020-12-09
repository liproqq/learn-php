<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book{
            private $title;
            private $author;
            private $pages;

            function __construct($title, $author, $pages){
                $this->title = $title;
                $this->setAuthor($author);
                $this->pages = $pages;

                echo "New Book $title created <br>";
            }

            public function isLong(){
                return $this->pages>500;
            }

            public function getAuthor(){
                return $this->author;
            }

            public function setAuthor($author){
                $this->author = $author;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book2 = new Book("Lord of the Rings", "JRR Tolkien", 700);

        echo var_export($book1->isLong());
        echo var_export($book1->getAuthor());
    ?>
</body>
</html>