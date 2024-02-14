<?php

class Core_Block_Layout extends Core_Block_Template{


    public function __construct(){  
        $actionName = $this->getRequest()->getActionName();
        if($actionName == 'index'){
            $this->setTemplate('core/1column.phtml');
        }else{
            $this->setTemplate('core/2column.phtml');
        }
        return $this;
    }

    public function prepareChildren(){

    }

    public function createBlock($className){
        Mage::getBlock('page/Header');
    }

    public function getRequest(){
        return  Mage::getModel('core/request');
    }

}