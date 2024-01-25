
<?php
include "functions.php";

include "mysql_func.php";
    echo "<br><br>";
// echo "<pre>";
// var_dump($_POST['product']);
define("PData",$_POST['product']);
echo "<br>";



    $conn = mysqli_connect("localhost","root","","ccc_practice");

    if(!$conn)
    {
        echo "There is Some Error in Connection";
    }else{

        if(isset($_POST['product']['submit']))
        {
            $productName = getproductData("productName");
            $sku = getProductData("sku");
            $productType = getProductData("productType");
            $category = getProductData("category");
            $manufacturerCost = getProductData("manufacturerCost");
            $shippingCost = getProductData("shippingCost");
            $totalCost = getProductData("totalCost");
            $price = getProductData("price");
            $status = getProductData("status");
            $createdAt = getProductData("createdAt");
            $updatedAt = getProductData("updatedAt");
            // $sku = $_POST["product"]["sku"];
            // $productType = $_POST["product"]["productType"];
            // $category = $_POST["product"]["category"];
            // $manufacturerCost = $_POST["product"]["manufacturerCost"];
            // $shippingCost = $_POST["product"]["shippingCost"];
            // $totalCost = $_POST["product"]["totalCost"];
            // $price = $_POST["product"]["price"];
            // $status = $_POST["product"]["status"];
            // $createdAt = $_POST["product"]["createdAt"];
            // $updatedAt = $_POST["product"]["updatedAt"];
        

            $sql = "INSERT INTO ccc_product VALUES ('','$productName', '$sku', '$productType', '$category', $manufacturerCost, $shippingCost, $totalCost, $price, '$status', '$createdAt', '$updatedAt')";
            mysqli_query($conn,$sql);
            echo "Data Send Database Succsessfully<br>";
        }

        
        echo "<br><br>";
        echo "<br><br>";
        
        echo '<a href="list.php">View Product List</a>';
        
        
    }

    
?>
</body>
</html>