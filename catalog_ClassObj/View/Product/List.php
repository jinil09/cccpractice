<?php

class View_Product_List{

    
    public function createTable(){
        $productData = new Model_ProductList();
        $pdata =$productData->getProductData();
        $cdata =$productData->getCategoryData();

        $table = '<h2>Product List</h2>';
        $table .= '<table border="1">';
        $table .= '<tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>SKU</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>';
        
        foreach ($pdata as $product) {
            $table .= '<tr>';
            $table .= '<td style="width:30px">' . $product['id'] . '</td>';
            $table .= '<td>' . $product['product_name'] . '</td>';
            $table .= '<td>' . $product['sku'] . '</td>';
            $catt= '<td> - </td>';
            foreach ($cdata as $cat) {
               if($cat['cat_id']==$product['category']){
                   $catt = '<td>'.$cat['name'].'</td>';
               }
            }
            $table .= $catt;
            $table .= '<td><a href="?id=' . $product['id'] . '">Edit</a></td>';
            $table .= '<td><a href="?delete=' . $product['id'] . '">Delete</a></td>';
            $table .= '</tr>';
        }

        $table .= '</table>';

        return $table;
    }


    public function toHtml(){
        $tHtm = $this->createTable();
        echo "Hello";
        $tHtm .= '<div class="anch">';
        $tHtm .= '<a href="./../product">Insert Data</a>';
        $tHtm .= '<a href="./../categorylist">See Category Data</a>';
        $tHtm .= '</div>';
        return $tHtm;
    }

}