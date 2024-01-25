<?php
include('sql/functions.php');
// echo "<pre>";
$cetegories = getCategories();
// var_dump($products);

if(isset($_GET['delete'])){
    $cat_id = $_GET['delete'];
    deleteData("ccc_category",$cat_id);
    echo "Delete category(Id value = {$cat_id}) Succsessfully";
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
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-flow:column;
            align-items: center;
            justify-content: center;
            height: auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Category List</h2>
    <table border="1">
        <tr>
            <th>Cat_Id</th>
            <th>Category List</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($cetegories as $cetegories): ?>
            <tr>
                <td style="width:50px;"><?= $cetegories['cat_id'] ?></td>
                <td><?= $cetegories['name'] ?></td>
                
                <td><a href="category_list.php?delete=<?= $cetegories['cat_id'] ?>">Delete</a></td>
                
                <!-- <td><form method="POST"><input type="submit" value="delete"></form></td> -->
            </tr>
        <?php endforeach; ?>
    </table>

    <?php echo "<a style='margin:30px;' href='category.php'>If you want to Add New Cetegories, Click Here</a>"?>
</body>
</html>
