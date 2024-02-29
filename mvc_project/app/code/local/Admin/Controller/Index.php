<?php

class Admin_Controller_Index extends Core_Controller_Front_Action
{

    public function getCss()
    {
        $layout = $this->getLayout();

        $layout->getChild('head')
            ->addCss('admin/header.css')
            ->addCss('2columnMain.css');
    }


    public function indexAction()
    {
        $layout = $this->getLayout();
        $this->getCss();
        $layout->setTemplate('admin/2column.phtml');
        $child = $layout->getChild('2left');
        $admin = $layout->createBlock('admin/header');
        $child->addChild('header', $admin);

        $child2 = $layout->getChild('content');
        $adminHeader = $layout->createBlock('admin/adminheader');
        $child2->addChild('adminheader', $adminHeader);

        $layout->toHtml();
    }

}
