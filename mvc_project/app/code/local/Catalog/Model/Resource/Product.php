<?php

class Catalog_Model_Resource_Product{

    protected $_tableName = '';
    protected $_primaryKey = '';

    public function init($tableName, $primaryKey){
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function load($id, $column = null){
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey} = $id LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }

    public function temp_Load($id='', $column= null){
        $sql = "SELECT * FROM {$this->_tableName}";
        return $this->getAdapter()->fetch_allData($sql);
    }


    public function getTableName()
    {
        return $this->_tableName;
    }

    public function getPrimaryKey(){
        return $this->_primaryKey;
    }

    public function getAdapter(){
        return new Core_Model_DB_Adapter();
    }



    public function save(Catalog_Model_Product $product){

        $data = $product->getData();
        // print_r($data);
        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }
        $insertData = $this->insertSql($this->getTableName(), $data);
        // echo $insertData;

        $id = $this->getAdapter()->insert($insertData);
        var_dump($id);
        $product->setId($id);
    }

    public function insertSql($tbname, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $val) {
            $columns[] = "`{$key}`";
            $values[] = "'" . addslashes($val) . "'";
        }
        $columns = implode(" , ", $columns);
        $values = implode(" , ", $values);

        return "INSERT INTO {$tbname}({$columns}) VALUES ({$values})";
    }
    //Above Part is Abstract

    public function __construct(){
        $this->init("catalog_product","product_id");
    }

}