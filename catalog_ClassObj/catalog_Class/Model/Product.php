<?php

class Model_Product Extends Model_Abstract {

    public $table_name = "ccc_product";

    public function __construct(){

    }

    public function save($data){
        echo "<pre>";
        $sql = $this->getQueryBuilder()
                ->insertData($this->table_name,$data);
                // echo $sql;
        $this->getQueryBuilder()->exec($sql);
    }

    public function saveCat($data){
        echo "<pre>";
        $sql = $this->getQueryBuilder()
                ->insertData('ccc_category',$data);
                // echo $sql;
        $this->getQueryBuilder()->exec($sql);
    }

    public function update($data,$pid){
        echo "<pre>";
        $sql = $this->getQueryBuilder()
                ->updateData($this->table_name,$data,["id"=>$pid]);
                // echo $sql;
        $this->getQueryBuilder()->exec($sql);
    }
    public function selectEditData($pid){
        $sql = $this->getQueryBuilder()->selectData($this->table_name, ["WHERE id="=>$pid]);
        $test = $this->getQueryBuilder()->exec($sql);
        $editData = $this->getQueryBuilder()->fetchAllData($test);
        return $editData;
    }

    public function delete($pid,$table_name){
        if($table_name == 'ccc_product')
        {
            $sql = $this->getQueryBuilder()->deleteData($table_name, ["id"=>$pid]);
        }else{
            $sql = $this->getQueryBuilder()->deleteData($table_name, ["cat_id"=>$pid]);
        }
        $this->getQueryBuilder()->exec($sql);
        // return $test;
    }
}