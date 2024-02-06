<?php

class View_Category{


    public function createForm()
    {
        $form = '<form action="" method="POST">';
        	$form .= '<div>';
	        	$form .= $this->createTextField('name', "Category Name: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createSubmitBtn('Submit');
	        $form .= '</div>';
		$form .= '</form>';
		return $form;
    }


    public function createTextField($name, $title, $value ='', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }

    public function createSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="'.$title.'">';
    }

    public function toHtml()
    {
    	return $this->createForm();
    }
}
