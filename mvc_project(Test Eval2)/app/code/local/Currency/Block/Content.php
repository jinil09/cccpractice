<?php

class Currency_Block_Content extends Core_Block_Template {

    public function __construct(){
         $this->setTemplate('currency/content.phtml');
    }

    public function getCountryData(){

        return Mage::getModel('currency/currency')->getCollection();
    }

    public function getToCountryData(){
      
      return Mage::getModel('currency/currency')->getCollection();
    }
 
    public function userData(){
      return  Mage::getModel('currency/usercurrency')->getCollection()
      ->addFieldToFilter('session_id', Mage::getSingleton('core/session')->get('session_id'))
      // ->addFieldToFilter('orderdby', "id");
      // ->getLastItem();
      ->setOrderBy('id DESC')
      ->setLimit(1);
    }
 }