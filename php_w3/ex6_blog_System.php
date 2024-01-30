<?php

class Post {
    public $title;
    public $content;

    public function displayInfo() {
        echo "[Title: $this->title, Author: $this->content]";
    }
}

class Blog {
    private $posts = [];

    public function addPost($book) {
        $this->posts[] = $book;
    }

    public function displayAllPosts() {
        foreach ($this->posts as $post) {
            $post->displayInfo();
            echo "<br>";
        }
    }

    public function removePost($index) {
            unset($this->posts[$index]);
    }
}

session_start();


if (!isset($_SESSION['blog'])) {
    $_SESSION['blog'] = new Blog();// creatre BLOG session obj for store data for previous book
}


$blog = $_SESSION['blog'];


if (isset($_POST['submit'])) {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $post = new Post();
    $post->title = $title;
    $post->content = $content;

    $blog->addPost($post);
}

if (isset($_POST['show_data'])) {
    $blog->displayAllPosts();
}


$_SESSION['blog'] = $blog;//we need to store current obj data to with prev one.
echo "<pre>";
print_r($_SESSION['blog']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG System</title>
</head>
<body>
    <form method="post">
        <label for="num1">title :</label>
        <input type="text" name="title" >

        <label for="num2">content :</label>
        <input type="text" name="content">

        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="show_data">Show Data</button>
    </form>
</body>
</html>
