<?php
include('sql/connection.php');
include('sql/functions.php');
// $categories = getCategories();


if(isset($_POST['submit'])){
    $name = $_POST['name'];

    $sql = "INSERT INTO ccc_category VALUES ('','$name')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
