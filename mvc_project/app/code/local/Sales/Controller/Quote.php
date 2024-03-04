<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function getCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css')
            ->addCss('1columnMain.css');
    }


    public function addAction(){
      $data = $this->getRequest()->getParams();
      print_r($data);
    }

}
