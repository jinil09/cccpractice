<?php


class Page_Controller_Index extends Core_Controller_Front_Action{

    public function indexAction(){
       $layout = $this->getLayout();

       $layout->getChild('head')->addJs('https://code.jquery.com/jquery-3.3.1.slim.min.js');
       $layout->getChild('head')->addJs('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
       $layout->getChild('head')->addCss('css/1column.css');
    //    print_r($layout->getChild('head'));
        
    $banner =  $layout->createBlock('core/template')
                        ->setTemplate('banner/banner.phtml');


    $content = $layout->getChild('content')
                        ->addChild('banner',$banner);
                        // ->addChild('banner',$banner);

    $layout->toHtml(); 
    }

    public function saveAction(){
        $leyout = $this->getLayout()->toHtml();
    }
    
}
