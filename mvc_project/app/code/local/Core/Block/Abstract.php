<?php

class Core_Block_Abstract{

    public $template;
    public $data = [];

    public function setTemplate($template) {
        $this->template = $template;
        return $this;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function __get($key) {
        // return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function __unset($key) {
        // unset($this->data[$key]);
    }

    public function __set($key, $value) {
        // $this->data[$key] = $value;
    }

    public function addData($key, $value) {
        // $this->data[$key] = $value;
    }

    public function getData($key = null) {
        // if ($key === null) {
        //     return $this->data;
        // }
        // return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function setData($data) {
        // $this->data = $data;
    }

    // public function getUrl($action = null, $controller = null, $params = [], $resetParams = false) {
        
    // }

    public function getUrl($path){
        return "http://localhost/Practice/mvc_project/".$path;
    }

    public function getRequest() {
        
    }

    public function render() { 
        include(Mage::getBaseDir('app') . '/design/frontend/template/' . $this->getTemplate());
    }
}