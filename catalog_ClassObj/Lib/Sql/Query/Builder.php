<?php

class Lib_Sql_Query_Builder Extends Lib_Connection{

    public function __construct(){
        
    }

    public function insertData($table_name,$data){
        $columns = $values = [];
        foreach ($data as $key => $value) {
            if($key=='submit') continue;
            $columns[] = sprintf("`%s`", $key);
            $values[]  = sprintf("'%s'", addslashes($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$table_name} ({$columns}) VALUES ({$values});";
    }


    function selectData($table_name, $addField1 = [])
    {
        $addF1=[];
        foreach ($addField1 as $key => $value) {
            $addF1[] = "$key $value";
        }
        
        $addF1 = implode(" ",$addF1);
        $sql = "SELECT * FROM {$table_name} {$addF1};";
        // echo $sql;
        return $sql;
    }

    function updateData($table_name,$data,$whereCondi){
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
        return $sql;
    }

    function deleteData($table_name,$whereCondi){
        $WCondi = [];

        foreach ($whereCondi as $col => $val) {
            $WCondi[] = "`$col` = '$val'";
        }
        $WCondi = implode(" AND ",$WCondi);
        $sql= "DELETE FROM {$table_name} WHERE {$WCondi};";
        return $sql;
    }


}