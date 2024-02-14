<?php

function selectData($tableName, $fields = ['*'], $conditions = [], $orderBy = '', $limit = ''){

    $selectFields = implode(', ', $fields);

    $where = '';
    $tempWc = [];
    if(!empty($conditions)){
        $where .= "WHERE ";
        foreach ($conditions as $col => $val) {
            $tempWc[] = "$col = '" . addslashes($val) . "'";
        }
        $tempWc = implode(" AND ", $tempWc);
        $where .= $tempWc;
    }

    $order = !empty($orderBy) ? "ORDER BY $orderBy" : "";

    $limitClause = !empty($limit) ? "LIMIT $limit" : "";

    $sql = "SELECT {$selectFields} FROM {$tableName} {$where} {$order} {$limitClause}";

    return $sql;
}

echo selectData("ccc_product", [], ["id" => 1020,"P_id"=>131], "id", 10);


function updateData($tableName, $setValues = [], $conditions = []) {

    $setFields = [];
    foreach ($setValues as $col => $val) {
        $setFields[] = "$col = '" . addslashes($val) . "'";
    }
    $setClause = implode(', ', $setFields);

    $where = '';
    $tempWc = [];
    if (!empty($conditions)) {
        $where .= "WHERE ";
        foreach ($conditions as $col => $val) {
            $tempWc[] = "$col = '" . addslashes($val) . "'";
        }
        $tempWc = implode(" AND ", $tempWc);
        $where .= $tempWc;
    }

    $sql = "UPDATE {$tableName} SET {$setClause} {$where}";

    return $sql;
}

// Example usage for UPDATE
echo updateData("ccc_product", ["name" => "Updated Product"], ["id" => 1020,"pid"=>131]);