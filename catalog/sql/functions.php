<?php

include('connection.php');

//Insert Data
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

//Update Data
    function updateData($table_name,$data,$whereCondi){
        global $conn;
        $col_valData = $condiData = [];
        foreach ($data as $col => $val) {
            if($col=='submit') continue;
            $col_valData[] = "`$col` = '".addslashes($val)."'";
         }
         foreach ($whereCondi as $Wcol => $Wval) {  
            $condiData[] = "`$Wcol` = '$Wval'";
         }
        
         $col_valData = implode(", ",$col_valData);
         $condiData = implode(" AND ", $condiData);

        $sql="UPDATE {$table_name} SET {$col_valData} WHERE {$condiData};";
        return $conn->query($sql);
    }


//select Data
    function selectData($table_name, $addField1 = [])
    {
        global $conn;
        $addF1=[];
        foreach ($addField1 as $key => $value) {
            $addF1[] = "$key $value";
        }
        
        $addF1 = implode(" ",$addF1);
        $sql = "SELECT * FROM {$table_name} {$addF1};";
        // echo $sql;
        $result=$conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

//Delete Data
    function deleteData($table_name,$whereCondi){
        global $conn;
        $WCondi = [];

        foreach ($whereCondi as $col => $val) {
            $WCondi[] = "`$col` = '$val'";
        }
        $WCondi = implode(" AND ",$WCondi);
        $sql= "DELETE FROM {$table_name} WHERE {$WCondi};";
        return $conn->query($sql);
    }


//Get Data Function
    function getproductData($values)
    { 
        return $_POST['product'][$values];
    }

?>