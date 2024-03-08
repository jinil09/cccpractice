<?php

class Currency_Model_Usercurrency extends Core_Model_Abstract{
    
    public function init(){
        $this->_resourceClass = "Currency_Model_Resource_Usercurrency";
        $this->_collectionClass = "Currency_Model_Resource_Collection_Usercurrency";
        $this->_modelClass = "currency/usercurrency";
    }

    public function getCurrencyValue($id){
      
        $currencyValue = Mage::getModel('currency/currency')->getCollection()
            ->addFieldToFilter('id',$id);
        foreach ($currencyValue->getData() as $value) {
            return $value->getRate();
        }
    }



    function convertCurrency($data) {
    
        if ($data['amount'] !== null) {
            
            $currencyCountry = $this->getCurrencyValue($data['currency_country']);
            $country = $this->getCurrencyValue($data['country']);

            $convertedAmount = $data['amount'] * ($currencyCountry / $country);
            return $convertedAmount;
        } else {
            return null;
        }
    }
}