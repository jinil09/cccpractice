<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Work</title>

    
</head> 
<body>
    
<h1>Product Form</h1><br><br>
    <form action="connect.php" method="POST" name="myform">

        <label name="productName">Product Name: </label>
        <input type="text" name="product[productName]" required><br>

        <label name="sku">SKU: </label>
        <input type="text" name="product[sku]" required><br>

        <label>Product Type: </label>
        <input type="radio" id="simpleType" name="product[productType]" value="Simple">
        <label name="simpleType">Simple</label>
        <input type="radio" id="bundleType" name="product[productType]" value="Bundle">
        <label name="bundleType">Bundle</label><br>

        <label name="category">Category: </label>
        <select name="product[category]" >
            <option value="">----- Select -----</option>
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

        <label name="manufacturerCost">Manufacturer Cost: </label>
        <input type="text" name="product[manufacturerCost]" required><br>

        <label name="shippingCost">Shipping Cost: </label>
        <input type="text" name="product[shippingCost]" required><br>

        <label name="totalCost">Total Cost: </label>
        <input type="text" name="product[totalCost]" required><br>

        <label name="price">Price: </label>
        <input type="text" name="product[price]" required><br>

        <label name="status">Status: </label>
        <select name="product[status]" required>
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
        </select><br>

        <label name="createdAt">Created At: </label>
        <input type="date" name="product[createdAt]" required><br>

        <label name="updatedAt">Updated At: </label>
        <input type="date" name="product[updatedAt]" required><br>

        <input type="submit" value="Submit" name="product[submit]">
    </form>

</body>
</html>