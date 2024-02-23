<?php 

class Catalog_Block_Admin_Product_Form extends Core_Block_Template{

    protected $_productData;
    
    public function __construct(){
        $this->setTemplate('catalog/admin/product/form.phtml');
    }

    public function setProductData($data)
    {
        $this->_productData = $data;
    }

    public function getProductData()
    {
        return $this->_productData;
    }
}