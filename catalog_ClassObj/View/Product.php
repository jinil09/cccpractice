<?php
class View_Product{

    public $Edata;
    public function __construct(){
        $obj = new Model_Request();
        if($obj->getQueryData('id') !== ''){
            $pid = ($obj->getQueryData('id'));
            $Updata = new Model_Product();
            $data = $Updata->selectEditData($pid);
            $this->Edata = new Model_Data_DataObj($data[0]);
            // print_r($this->Edata);
        }else{
            $this->Edata = new Model_Data_DataObj('');
        }
    }

    public function createForm(){
        $form = '<form action="" method="POST">';
        	$form .= '<div>';
	        	$form .= $this->createTextField('product[product_name]', "Product Name: ", $this->Edata->getproduct_name() );
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createTextField('product[sku]', "Sku: ", $this->Edata->getsku());
	        $form .= '</div>';
	        $form .= '<div class="rset">';
            $form .= 'Prouct Type : ';
            $form .= $this->createRadioButton("product[product_type]","Simple",($this->Edata->getproduct_type()== 'Simple') ? 'checked' : '');
            $form .= 'Simple';
            $form .= $this->createRadioButton("product[product_type]","Bundle", ($this->Edata->getproduct_type()== 'Bundle') ? 'checked' : '');
            $form .= 'Bundle';
            $form .= '</div>';
	        $form .= '<div>';
	        $form .= '<div>';
            $form .= 'Category';
            $pd = new Model_ProductList();
            $cat_data = $pd->getCategoryData();
            
            $form .= $this->createSelectField("product[category]",$cat_data, $this->Edata->getcategory());
            $form .= '</div>';
	        	$form .= $this->createTextField('product[price]', "Price: ",$this->Edata->getprice());
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createTextField('product[manufacturer_cost]', "Manufacturer Cost: ",$this->Edata->getmanufacturer_cost());
	        $form .= '</div>';
            $form .= '<div>';
	        	$form .= $this->createTextField('product[shipping_cost]', "Shipping Cost: ",$this->Edata->getshipping_cost());
	        $form .= '</div>';
            $form .= '<div>';
	        	$form .= $this->createTextField('product[total_cost]', "Total Cost: ",$this->Edata->gettotal_cost());
	        $form .= '</div>';
            $form .= '<div>';
	        	$form .= $this->createDate('product[created_at]', "CreatedAt: ",$this->Edata->getcreated_at());
	        $form .= '</div>';
            $form .= '<div>';
	        	$form .= $this->createDate('product[updated_at]', "UpdatedAt: ",$this->Edata->getupdated_at());
	        $form .= '</div>';
	        $form .= '<div>';
                $obj = new Model_Request();
	        	$form .= $this->createSubmitBtn(($obj->getQueryData('id') !== '') ? 'Update' : 'Submit');
	        $form .= '</div>';
		$form .= '</form>';
		return $form;
    }


    public function createTextField($name, $title, $value ='', $id = ''){
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }


    public function createRadioButton($name,$value='', $check=''){
        return '<input type="radio" name="' . $name . '" value="' . $value . '" '.$check.'>';
    }

    public function createSelectField($name,$cdata,$selected){

        $selectF = '<select name='.$name.'>';
        $selectF .= '<option value=""> ---Select Data--- </option>';
        foreach ($cdata as $catData) {
            $selStr = '';
            if($catData['cat_id'] == $selected)
                {   
                    $selStr .= 'selected';
                }

            $selectF .= '<option value="'.$catData['cat_id'].'" '.$selStr.'>'. $catData['name'] .'</option>';
        }
        $selectF .= '</select>';

        return $selectF;
    }

    public function createDate($name,$title,$value=''){
        return '<span> ' . $title . ' </span><input type="date" name="' . $name . '" value="' . $value . '">';
    }


    public function createSubmitBtn($title){
        return '<input type="submit" name="submit" value="'.$title.'">';
    }

    public function toHtml(){
        $tHtm = $this->createForm();
        $tHtm .= '<div class="anch">';
        $tHtm .= '<a href="productlist">Show Data</a>';
        $tHtm .= '<a href="categorylist">See Category Data</a>';
        $tHtm .= '</div>';
    	return $tHtm;
    }
}