<?php

include('connection.php');

    function updateData($product_id,$productName, $sku, $category, $price){
        global $conn;
        $sql = "UPDATE ccc_product SET product_name='$productName', sku='$sku', category='$category', price=$price WHERE id=$product_id";
        return $conn->query($sql);
    }

    function deleteData($table_name,$id){
        global $conn;
        if($table_name == 'ccc_product')
        {
            $sql = "DELETE FROM {$table_name} WHERE id=$id";
        }else{

            $sql = "DELETE FROM {$table_name} WHERE cat_id=$id";
        }
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
        return $result -> fetch_all(MYSQLI_ASSOC);
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

    function insertData($tableName,$data){
        global $conn;
        $columns = $values = [];
        foreach ($data as $col => $val) {
            if($col=='submit') continue;
            $columns [] = "`$col`";
            $values [] = "'".addslashes($val)."'";
        }

        $columns = implode(", ",$columns);
        $values = implode(", ",$values);
        
        $sql ="INSERT INTO {$tableName}({$columns}) VALUES({$values});";
        return $conn->query($sql);
    }
?>