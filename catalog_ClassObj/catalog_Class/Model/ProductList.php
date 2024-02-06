<?php

class Model_ProductList Extends Model_Abstract{

    public $table_name_p = 'ccc_product';
    public $table_name_c = 'ccc_category';

    public function getProductData(){
        $sql =$this->getQueryBuilder()->selectData($this->table_name_p,[]);
        $test = $this->getQueryBuilder()->exec($sql);
        $pdata = $this->getQueryBuilder()->fetchAllData($test);
        return $pdata;
    }

    public function getCategoryData(){
        $sql =$this->getQueryBuilder()->selectData($this->table_name_c,[]);
        $test = $this->getQueryBuilder()->exec($sql);
        $cdata = $this->getQueryBuilder()->fetchAllData($test);
        return $cdata;
    }
}