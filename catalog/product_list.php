<?php
include('sql/functions.php');
// echo "<pre>";
$products = getProducts();
// var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <h2>Product List</h2>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>SKU</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['sku'] ?></td>
                <td><?= $product['category'] ?></td>
                <td><a href="product.php?edit=<?= $product['id'] ?>">Edit</a></td>
                <td><a href="product.php?delete=<?= $product['id'] ?>">Delete</a></td>
                
                <!-- <td><form method="POST"><input type="submit" value="delete"></form></td> -->
            </tr>
        <?php endforeach; ?>
    </table>

    <?php echo "<a href='product.php'>If you want to Insert New Data, Click Here</a>"?>
</body>
</html>
