<?php

include('connection.php');

    function updateData($product_id,$productName, $sku, $category, $price){
        global $conn;
        $sql = "UPDATE ccc_product SET product_name='$productName', sku='$sku', category='$category', price=$price WHERE id=$product_id";
        return $conn->query($sql);
    }

    function deleteData($product_id){
        global $conn;
        $sql = "DELETE FROM ccc_product WHERE id=$product_id";
        return $conn->query($sql);
    }



    function getproductData($values)
    { 
        // var_dump($_POST['product']);
        // exit;
        return $_POST['product'][$values];
    }

    function getProducts(){
        global $conn;
        $sql = "SELECT * FROM ccc_product ORDER BY id DESC LIMIT 10";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
  
    }

    function getCategories(){
        global $conn;
        $sql = "SELECT * FROM ccc_category";
        $result = $conn -> query($sql);
        return $result -> fetch_all(MYSQL_ASSOC);
    }


    // $productName, $sku, $productType, $category, $manufacturerCost, $shippingCost, $totalCost, $price, $status, $createdAt, $updatedAt

    function updateDataa($table_name,$data,$whereCondi){
        global $conn;
        $col_valData = $condiData = [];
        foreach ($data as $col => $val) {
            if($col=='submit') continue;
            $col_valData[] = "`$col` = '".addslashes($val)."'";
         }
        //  foreach ($whereCondi as $Wcol => $Wval) {  
        //     $condiData[] = "`$Wcol` = '$Wval'";
        //  }
        
         $col_valData = implode(", ",$col_valData);

        $sql="UPDATE {$table_name} SET {$col_valData} WHERE id=$whereCondi;";
        return $conn->query($sql);
    }
?>