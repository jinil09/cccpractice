<?php

class Controller_Front
{
    
    private $routes = [
        '' => 'showProductList',
        'productlist' => 'showProductList',
        'categorylist' => 'showCategoryList',
        'category' => 'showCategory',
        'delete' => 'deleteItem',
        'product' => 'productData'
    ];

    public function init()
    {

        $request = new Model_Request();
        $uri = $request->getUri();
    
        // $route = $this->getRouteFromUri($uri);
        $methodName = $this->routes[$uri] ?? 'defaultMethod';
        $className = $this->getClassNameFromUri($uri);
        $data = $this->$methodName($request, $className);

        return $data->toHtml();
    }

    public function getClassNameFromUri($uri) {
        $uri = str_replace("/", "_", $uri);
        if ($uri !== '') {
            return  $uri = "View_" . ucwords($uri, "_");
        } else {
            return $uri = "View_Productlist";
        }
    }

    public function showProductList($request,$className)
    {
        return $data = new $className(); 
    }

    public function productData($request,$className)
    {
        if(!$request->isPost()){     
            return $data = new $className();
        }else{
            $productOp = new Model_Product();
            if(!$request->getQueryData()== ''){
                $pid= $request->getQueryData('id');
                $productOp->update($request->getPostData('product'),$pid);
                header('Location: productlist');
            }else{
                $productOp->save($request->getPostData('product'));
                header('Location: product');
            }
        }

    }

    public function showCategoryList($request,$className)
    {
        return $data = new $className(); 
    }

    public function deleteItem($request,$className)
    {
        $productOp = new Model_Product();
        $pid =$request->getQueryData('delete');
        if ($className == 'View_Delete') {
            $productOp->delete($pid,"ccc_product");
            header('Location: productlist');
        } elseif ($type == 'View_Deletec') {
            $productOp->delete($pid,"ccc_category"); 
            header('Location: categorylist');
        } else {
            echo "Invalid type specified";
        }
       
    }

    public function showCategory($request,$className)
    {
        $productOp = new Model_Product();
        if(!$request->isPost()){
            return $data = new $className();            
        }else{
            $productOp->saveCat($request->getPostData());
        }
    }

    public function defaultMethod($request, $className)
    {
         echo "404 Not Found"; 
    }

}