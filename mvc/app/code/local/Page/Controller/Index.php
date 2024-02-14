<?php


class Page_Controller_Index extends Core_Controller_Front_Action{

    public function indexAction(){
       $layout = $this->getLayout()->toHtml(); 
    }

    public function saveAction(){
        $leyout = $this->getLayout()->toHtml();
    }
    
}
