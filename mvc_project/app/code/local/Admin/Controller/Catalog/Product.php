<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{


    protected $_allowedAction = ['form'];

    public function getCss()
    {
        $layout = $this->getLayout();
        $layout->setTemplate('admin/2column.phtml');
        $child = $layout->getChild('2left');
        $admin = $layout->createBlock('admin/header');

        $child2 = $layout->getChild('content');
        $adminHeader = $layout->createBlock('admin/adminheader');
        $child2->addChild('adminheader', $adminHeader);


        $child->addChild('header', $admin);
        $layout->getChild('head')
            ->addCss('admin/header.css')
            ->addCss('product/form.css')
            ->addCss('product/list.css')
            ->addCss('2columnMain.css');
    }


    public function indexAction()
    {
        $layout = $this->getLayout();
        $this->getCss();
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function formAction()
    {
        $layout = $this->getLayout();
        $this->getCss();
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $this->getCss();
        $child = $layout->getChild('content');
        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }

    public function deleteAction(){
        $id = $this->getRequest()->getParams('id');
        $product = Mage::getModel('catalog/product')->load($id);
        $product->delete();
        $this->getRequest()->redirect('admin/catalog_product/list');
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        $productModel = Mage::getModel('catalog/product');
        $productModel->setData($data);
        $productModel->save();
        $newItemId = $productModel->getId();
        $this->getRequest()->redirect('admin/catalog_product/list?highlighted_id='.$newItemId);
    }

}
