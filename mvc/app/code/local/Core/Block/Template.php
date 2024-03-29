<?php

class Core_Block_Template extends Core_Block_Abstract{

    public $template;
    protected $_child = [];

    public function toHtml(){
        $this->render();
    }

    public function addChild($key, $value){
        $this->_child[$key] = $value;
    }       

    public function removeChild($key){

        if(issse($this->_child[$key]))
        {
            unset($this->_child[$key]);
        }
        return $this;
    }

    public function getChild($key){
        return $this->_child[$key];
    }

    public function getRequest(){
        return  Mage::getModel('core/request');
    }

    public function getChildHtml($key){
        return $this->getChild($key)->toHtml();
    }

}