<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Work</title>

</head>
<body>
    
    <form action="" method="POST">

        <label name="productName">Product Name:</label>
        <input type="text" name="productName" required><br>

        <label name="sku">SKU:</label>
        <input type="text" name="sku" required><br>

        <label>Product Type:</label>
        <input type="radio" id="simpleType" name="productType" value="Simple" checked>
        <label name="simpleType">Simple</label>
        <input type="radio" id="bundleType" name="productType" value="Bundle">
        <label name="bundleType">Bundle</label><br>

        <label name="category">Category:</label>
        <select name="category" required>
            <option value="Bar & Game Room">Bar & Game Room</option>
            <option value="Bedroom">Bedroom</option>
            <option value="Decor">Decor</option>
            <option value="Dining & Kitchen">Dining & Kitchen</option>
            <option value="Lighting">Lighting</option>
            <option value="Living Room">Living Room</option>
            <option value="Mattresses">Mattresses</option>
            <option value="Office">Office</option>
            <option value="Outdoor">Outdoor</option>
        </select><br>

        <label name="manufacturerCost">Manufacturer Cost:</label>
        <input type="text" name="manufacturerCost" required><br>

        <label name="shippingCost">Shipping Cost:</label>
        <input type="text" name="shippingCost" required><br>

        <label name="totalCost">Total Cost:</label>
        <input type="text" name="totalCost" required><br>

        <label name="price">Price:</label>
        <input type="text" name="price" required><br>

        <label name="status">Status:</label>
        <select name="status" required>
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
        </select><br>

        <label name="createdAt">Created At:</label>
        <input type="date" name="createdAt" required><br>

        <label name="updatedAt">Updated At:</label>
        <input type="date" name="updatedAt" required><br>

        <input type="submit" value="Submit" name="submit">
    </form>

<?php

    $conn = mysqli_connect("localhost","root","","ccc_practice");
    $err = "";

    if(!$conn)
    {
        echo "There is Some Error in Connection";
    }else{

        if(isset($_POST['submit']))
        {
            $productName = $_POST["productName"];
            $sku = $_POST["sku"];
            $productType = $_POST["productType"];
            $category = $_POST["category"];
            $manufacturerCost = $_POST["manufacturerCost"];
            $shippingCost = $_POST["shippingCost"];
            $totalCost = $_POST["totalCost"];
            $price = $_POST["price"];
            $status = $_POST["status"];
            $createdAt = $_POST["createdAt"];
            $updatedAt = $_POST["updatedAt"];
    
            $sql = "INSERT INTO ccc_product (product_name, sku, product_type, category, manufacturer_cost, shipping_cost, total_cost, price, status, created_at, updated_at) 
                VALUES ('$productName', '$sku', '$productType', '$category', $manufacturerCost, $shippingCost, $totalCost, $price, '$status', '$createdAt', '$updatedAt')";
            mysqli_query($conn,$sql);
        }
    }


?>
</body>
</html>