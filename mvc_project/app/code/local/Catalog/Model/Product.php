<?php

class Catalog_Model_Product extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = "Catalog_Model_Resource_Product";
        $this->_collectionClass = "Catalog_Model_Resource_Collection_Product";
    }

    public function getStatus(){
        if (isset($this->_data['status'])) {
            $mapping = [
                1=>"Enable",
                0=>"Disabel"
            ];
            return $mapping[$this->_data['status']];
        }
    }

    protected function _beforeSave(){
        $currentDateTime = date('Y-m-d H:i:s');

        if (!isset($this->_data['created_at']) || $this->_data['created_at'] === "") {
            $this->_data['created_at'] = $currentDateTime;
        }

        $this->_data['updated_at'] = $currentDateTime;
        return $this;
    }

    protected function _afterSave()
    {
        
    }

}