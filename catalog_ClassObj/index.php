<link rel="stylesheet" href="css/style.css">
<?php

include'Lib/Autoloader.php';


class Ccc{

    public static function init(){

        $obj = new Controller_Front();
        echo ($obj->init());
    }
}
Ccc::init();
// // print_r($_SERVER);
// // Instantiate Model objects
// $productOp = new Model_Product();
// $request = new Model_Request();


// //URI information for Routing
// $uri =($_SERVER['REQUEST_URI']);
// // var_dump($uri);
// $uri = explode("/",$uri);
// $delPos = strpos($uri[2],"delete");
// $duri = substr($uri[2],$delPos,6);
// $uri = end($uri);




// if($uri == 'product_list' || $uri == '')
// {
//     // Display product list
//     $product_list= new View_ProductList();
//     echo $product_list->toHtml();
// }elseif ($uri == 'category_list') {
//     //Display ctegory list
//     $category_list= new View_CategoryList();
//     echo $category_list->toHtml();
// }elseif ($uri == 'categoryInsertData') {
//     //Display category Insert Data
//     if(!$request->isPost()){
//         $cat_insert = new View_Category();
//         echo $cat_insert->toHtml();
//     }else{
//         $productOp->saveCat($request->getPostData());
//         echo "<script>alert('Data Enter succssefuly')</script>";
//         header('Location: categoryInsertData');
//     }
//     echo '<a href="category_list">Category List</a>';
// }elseif ($duri == 'delete') {
//     //Delete Operation
//     $pid =$request->getQueryData('delete');
//     $type = ''; 
//     if (strpos($_SERVER['REQUEST_URI'], 'category_list') !== false) {
//         $type = 'category';
//     } elseif (strpos($_SERVER['REQUEST_URI'], 'product_list') !== false) {
//         $type = 'product';
//     }

//     if ($type == 'product') {
//         $productOp->delete($pid,"ccc_product");
//         header('Location: product_list');
//     } elseif ($type == 'category') {
//         $productOp->delete($pid,"ccc_category"); 
//         header('Location: category_list');
//     } else {
//         echo "Invalid type specified";
//     }
// }else{
//     // Handle product Insert or update
    // if(!$request->isPost()){
    //     $product = new View_Product();
    //     echo $product->tohtml();
    //     echo '<a href="product_list">Product List</a>';
    // }else{
    //     if(!$request->getQueryData()== ''){
    //         //Update Data
    //         $pid= $request->getQueryData('id');
    //         $productOp->update($request->getPostData('product'),$pid);
    //         echo "<script>alert('Data Update succssefuly')</script>";
    //         header('Location: product_list');
    //     }else{
    //         //Insert New Data
    //         $productOp->save($request->getPostData('product'));
    //         echo "Data Enter succssefuly";
    //         header('Location: insertData');
    //     }
    //     echo '<a href="product_list">Product List</a>';
    // }
// }
