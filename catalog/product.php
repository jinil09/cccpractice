<?php

include('sql/functions.php');
$catData = selectData("ccc_category");

if(isset($_GET['edit']))
{
    $product_id = $_GET['edit'];
    $product = $conn -> query("SELECT * FROM ccc_product WHERE id=$product_id")->fetch_assoc();
}
if(isset($_GET['delete']))
{
    $product_id = $_GET['delete'];
    deleteData("ccc_product",["id"=>$product_id]);
    echo "Delete Data(Id value = {$product_id}) Succsessfully";
    header('Location: product_list.php');
}

if(isset($_POST['product']['submit']))
        {
            $productName = getProductData("product_name");
            $sku = getProductData("sku");
            $productType = getProductData("product_type");
            $category = getProductData("category");
            $manufacturerCost = getProductData("manufacturer_cost");
            $shippingCost = getProductData("shipping_cost");
            $totalCost = getProductData("total_cost");
            $price = getProductData("price");
            $status = getProductData("status");
            $createdAt = getProductData("created_at");
            $updatedAt = getProductData("updated_at");
        
            $productData = $_POST['product'];//Main data --> Form Capture

            if(isset($_GET['edit'])){
                $product_id = $_GET['edit'];
                $product = $conn -> query("SELECT * FROM ccc_product WHERE id=$product_id")->fetch_assoc();
                updateData("ccc_product",$productData,["id"=>$product_id]);
                echo "Update Data(Id value = {$product_id}) Succsessfully";
            }
            else{
                insertData("ccc_product",$productData);
                echo '<script>alert("Product Data Send Database successfully!");</script>';
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Work</title>

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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            max-width: 100%;
            margin-bottom:3rem;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .anch{
            display:flex;
            justify-content:space-evenly;
            font-size:18px;
            margin:3rem;
            text-decoration: underline;
        }
        .radioC{
            display:flex;
            align-items: center;
            margin:1rem;
            gap:50px;
        }
    </style>
    
</head> 
<body>
    
<h1>Product Form</h1><br><br>
    <form method="POST" name="myform">

        <label name="product_name">Product Name: </label>
        <input type="text" name="product[product_name]" value="<?= isset($product) ? $product['product_name'] : '' ?>"><br>

        <label name="sku">SKU: </label>
        <input type="text" name="product[sku]" value="<?= isset($product) ? $product['sku'] : '' ?>"><br>

        <label>Product Type: </label>
        <div class="radioC">
            <input type="radio" id="simpleType" name="product[product_type]" value="Simple" <?= (isset($product)&&($product['product_type'] == "Simple")) ? 'checked' : '' ?>  >
            <label name="simpleType">Simple</label>
            <input type="radio" id="bundleType" name="product[product_type]" value="Bundle" <?= (isset($product)&&($product['product_type'] == "Bundle")) ? 'checked' : '' ?>>
            <label name="bundleType">Bundle</label><br>

        </div>

        <label name="category">Category: </label>
        <select name="product[category]" >
            <option value="">----- Select -----</option>
            <?php foreach($catData as $cat) :?>
                <option value="<?= $cat['cat_id']?>" <?= (isset($product) && $product['category'] == $cat['cat_id']) ? 'selected' : '' ?>><?= $cat['name']?></option>
            <?php endforeach;?>
        </select><br>

        <label name="manufacturerCost">Manufacturer Cost: </label>
        <input type="text" name="product[manufacturer_cost]" value="<?= isset($product) ? $product['manufacturer_cost'] : '' ?>"><br>

        <label name="shippingCost">Shipping Cost: </label>
        <input type="text" name="product[shipping_cost]" value="<?= isset($product) ? $product['shipping_cost'] : '' ?>"><br>

        <label name="totalCost">Total Cost: </label>
        <input type="text" name="product[total_cost]" value="<?= isset($product) ? $product['total_cost'] : '' ?>"><br>

        <label name="price">Price: </label>
        <input type="text" name="product[price]" value="<?= isset($product) ? $product['price'] : '' ?>"><br>

        <label name="status">Status: </label>
        <select name="product[status]" >
            <option value="Enabled" <?=(isset($product)&&($product['status'] == 'Enabled')) ? 'selected' : ''?>>Enabled</option>
            <option value="Disabled" <?=(isset($product)&&($product['status'] == 'Disabled')) ? 'selected' : ''?>>Disabled</option>
        </select><br>

        <label name="createdAt">Created At: </label>
        <input type="date" name="product[created_at]" value="<?= isset($product) ? $product['created_at'] : '' ?>"><br>

        <label name="updatedAt">Updated At: </label>
        <input type="date" name="product[updated_at]" value="<?= isset($product) ? $product['updated_at'] : '' ?>"><br>

        <input type="submit" value="<?= (isset($product)&&isset($_GET['edit'])) ? 'Update' : 'Submit' ?>" name="product[submit]">
        <div class="anch">
            <a href='category_list.php'>See all Category</a>
            <a href="product_list.php">Product List</a>
        </div>
    </form>


</body>
</html>