<?php 

class Catalog_Block_Admin_Category_Form extends Core_Block_Template{

    protected $_catData;
    
    public function __construct(){
        $this->setTemplate('catalog/admin/category/form.phtml');
    }

    public function setProductData($data)
    {
        $this->_catData = $data;
    }

    public function getProductData()
    {
        return $this->_catData;
    }
}