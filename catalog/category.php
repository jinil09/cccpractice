<?php
include('sql/connection.php');
include('sql/functions.php');
// $categories = getCategories();


if(isset($_POST['submit'])){
    $CatData = $_POST;
    $name = $_POST['name'];
    insertData("ccc_category",$CatData);
    // $sql = "INSERT INTO ccc_category VALUES ('','$name')";
    // mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-flow:column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width:500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: #ff0000;
            margin-bottom: 10px;
        }
        .anch{
            display:flex;
            gap:20px
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Category Name</label>
        <input type="text" name="name">
        <input type="submit" value="submit" name="submit">
    </form>
    <div class="anch">

        <a style="margin:30px;" href="product_list.php">Product List</a>
        <a style="margin:30px;" href="category_list.php">Category List</a>
    </div>
</body>
</html>
