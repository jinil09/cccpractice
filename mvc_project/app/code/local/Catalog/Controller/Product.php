<pre><?php


class Catalog_Controller_Product extends Core_Controller_Front_Action{

    public function indexAction(){
       $layout = $this->getLayout();

       $layout->getChild('head')->addJs('https://code.jquery.com/jquery-3.3.1.slim.min.js');
       $layout->getChild('head')->addJs('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
       $layout->getChild('head')->addCss('css/1column.css');
       $layout->toHtml(); 
    }

    public function newAction()
    {
        $layout = $this->getLayout();
        $child=$layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function listAction(){
        $layout = $this->getLayout();

        $list = $layout->createBlock('catalog/admin_product_list');
        $layout->addChild('list',$list);

        $layout->getChildHtml('list');

    
        

    }

    public function saveAction(){
        $data = $this->getRequest()->getParams();
        $productModel = Mage::getModel('catalog/product')
                        ->setData($data);
                        $productModel->save();
        
        // $data  = $this->getLayout()->getRequest()->getPostData();
        // $productModel->setData($data)->save();
        // print_r($data);
        
        // header('Location : http://localhost/Practice/mvc_project/catalog/product/index');
        print_r($productModel);

    }
    
}
