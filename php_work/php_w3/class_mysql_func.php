<?php

$conn = mysqli_connect("localhost","root","","ccc_practice");
class QueryBuilder{

    public function insertData($table_name,$data){
        $columns = $values = [];
        foreach ($data as $col => $val) {
            $columns [] = "`$col`";
            $values [] = "'".addslashes($val)."'";
        }

        $columns = implode(", ",$columns);
        $values = implode(", ",$values);
        
        $sql ="INSERT INTO {$table_name}({$columns}) VALUES({$values});";
        return $sql;
    }

    public function updateData($table_name,$data,$whereCondi){

        $col_valData = $condiData = [];
        foreach ($data as $col => $val) {
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

    public function deleteData($table_name,$whereCondi){
        $WCondi = [];

        foreach ($whereCondi as $col => $val) {
            $WCondi[] = "`$col` = '$val'";
        }
        $WCondi = implode(" AND ",$WCondi);
        $sql= "DELETE FROM {$table_name} WHERE {$WCondi};";
        return $sql;
    }

    public function selectData($table_name, $select_Col, $whereCondi, $orderBy, $limit){
        $whereC='';
        $conditionsWh = [];

        if(!empty($whereCondi)){
            $whereC = 'WHERE';

            foreach ($whereCondi as $col => $val) {
                $conditionsWh[] = "`$col` = '".addslashes($val)."'";
            }
            $conditionsWh = implode(" AND ",$conditionsWh);
            $whereC .= $conditionsWh;
        }

        $orderdByCalause = (!empty($orderBy))? " ORDER BY $orderBy" : '';
        $limitClause = (!empty($limit)) ? " LIMIT $limit" : ''; 

        $sql = "SELECT {$select_Col} FROM {$table_name} {$whereC} {$orderdByCalause} {$limitClause}";
        return $sql;
    }

    public function table($column,$rows){
        echo "<table border=1>";
        echo "<tr>";
        foreach ($column as $col) {
            echo "<th>".$col."</th>";
        }
        echo "</tr>";
        foreach ($rows as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td>".$val."</td>";
            }
            echo "</tr>";
        }
    
        echo "</table>";
    }
    
}


class QueryExecuter{

    public function execute($sql){
        global $conn;
        try {
            $result=$conn->query($sql);    
        } catch (Exseption $e) {
           echo $e->getMassage();
        }
        return $result;
    }

    public function fetch_allData($result){
        $column = $rows = [];
        
        $columnFields = $result->fetch_fields();

        foreach ($columnFields as $fields) {
            $this->column[] = $fields->name;
        }

        while ($row = $result->fetch_assoc()) {
            $this->rows[] = $row;
        }

        
        $tab = new QueryBuilder();
        $tab->table($this->column,$this->rows);
    }
}

$obj= new QueryBuilder();
$sql =$obj->selectData("ccc_category","*",[],"cat_id DESC","10");

$obj = new QueryExecuter();
$result= $obj->execute($sql);
// print_r($result);


$obj->fetch_allData($result);

?>