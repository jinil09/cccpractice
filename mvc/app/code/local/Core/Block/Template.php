<?php

class Core_Block_Template extends Core_Block_Abstract{

    public $template;

    public function toHtml(){
        $this->render();
    }

    public function addChild($key, $value){

    }

    public function removeChild($key){

    }

    public function getChild($key){
        
    }

}