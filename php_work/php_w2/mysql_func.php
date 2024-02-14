<?php

//Insert Data Query
    function insertData($tableName,$data){

        $columns = $values = [];
        foreach ($data as $col => $val) {
            $columns [] = "`$col`";
            $values [] = "'".addslashes($val)."'";
        }

        $columns = implode(", ",$columns);
        $values = implode(", ",$values);
        
        echo "INSERT INTO {$tableName}({$columns}) VALUES({$values});";
    }

    // insertData("ccc_practice",['pname'=>'test','price'=>1200,'valCode'=>'NOTExpire']);
    echo "<br><br>";
    $data = $_POST['product'];
        // var_dump($data);
    insertData("ccc_practice",$data);

    echo "<br><br>";
//Update Data Query
    function updateData($table_name,$data,$whereCondi){

        $col_valData = $condiData = [];
        foreach ($data as $col => $val) {
            
            $col_valData[] = "`$col` = '".addslashes($val)."'";
         }
         foreach ($whereCondi as $Wcol => $Wval) {  
            $condiData[] = "`$Wcol` = '$Wval'";
         }

         $col_valData = implode(", ",$col_valData);
         $condiData = implode(" AND ",$condiData);
        echo "UPDATE {$table_name} SET {$col_valData} WHERE {$condiData};";
    }

    updateData("ccc_practice",['pname'=>'test','price'=>1200,'valCode'=>'notexpire'],['id'=>1,'pncCode'=>13]);
    
    echo "<br><br>";
//Delete Data Query
    function deleteData($table_name,$whereCondi)
    {
        $condiData = [];
        foreach ($whereCondi as $Wcol => $Wval) {
            $condiData[] = "`$Wcol` = '".addslashes($Wval)."'";
        }

        $condiData = implode(" AND ", $condiData);
        echo "DELETE FROM {$table_name} WHERE {$condiData};";
    }

    deleteData("ccc_practice",['id'=>1,'pncCode'=>13]);



?>