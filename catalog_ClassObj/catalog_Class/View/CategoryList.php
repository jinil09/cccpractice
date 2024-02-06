<?php

class View_CategoryList{


    public function createTable(){
        $productData = new Model_ProductList();
        $cdata =$productData->getCategoryData();

        $table = '<h2>Category List</h2>';
        $table .= '<table border="1">';
        $table .= '<tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Delete</th>
                </tr>';
        
        foreach ($cdata as $cat) {
            $table .= '<tr>';
            $table .= '<td style="width:30px">' . $cat['cat_id'] . '</td>';
            $table .= '<td>' . $cat['name'] . '</td>';
            $table .= '<td><a href="?delete=' . $cat['cat_id'] . '">Delete</a></td>';
            $table .= '</tr>';
        }

        $table .= '</table>';

        return $table;
    }


    public function toHtml(){
        $tHtm = $this->createTable();
        $tHtm .= '<div class="anch">';
        $tHtm .= '<a href="product_list">Product List</a>';
        $tHtm .= '<a href="categoryInsertData">Insert Category Data</a>';
        $tHtm .= '</div>';
        return $tHtm;
    }
}