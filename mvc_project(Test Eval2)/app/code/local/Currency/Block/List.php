<?php

class Currency_Block_List extends Core_Block_Template {
     protected $_catArray = [];

    public function __construct(){
         $this->setTemplate('currency/list.phtml');
    }

    public function getUserData(){
          return Mage::getModel('currency/usercurrency')->getCollection()
                    ->addFieldToFilter('session_id', Mage::getSingleton('core/session')->get('session_id'));
    }

    public function getCountryIdByName($id){
        if(isset($this->_catArray[$id])){
            return $this->_catArray[$id];
        }else{
            $currencyData = Mage::getModel('currency/currency')->getCollection();
            foreach ($currencyData->getData() as $value) {
                $this->_catArray[$value->getId()] = $value->getCounty();
            }
            return $this->_catArray[$id];
        }
    }
 
 }