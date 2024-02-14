<?php

class Book {
    public $title;
    public $author;

    public function displayInfo() {
        echo "[Title: $this->title, Author: $this->author]";
    }
}

class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function displayAllBooks() {
        foreach ($this->books as $book) {
            $book->displayInfo();
            echo "<br>";
        }
    }

    public function removeBook($index) {
            unset($this->books[$index]);
    }
}

session_start();


if (!isset($_SESSION['library'])) {
    $_SESSION['library'] = new Library();// creatre Library session obj for store data for previous book
}


$library = $_SESSION['library'];


if (isset($_POST['submit'])) {
    $bookName = $_POST["BookName"];
    $authorName = $_POST["AuthName"];

    $book = new Book();
    $book->title = $bookName;
    $book->author = $authorName;

    $library->addBook($book);
}

if (isset($_POST['show_data'])) {
    $library->displayAllBooks();
}


$_SESSION['library'] = $library;//we need to store current obj data to with prev one.
echo "<pre>";
print_r($_SESSION['library']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
</head>
<body>
    <form method="post">
        <label for="num1">Book Name:</label>
        <input type="text" name="BookName" >

        <label for="num2">Author Name:</label>
        <input type="text" name="AuthName">

        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="show_data">Show Data</button>
    </form>
</body>
</html>
