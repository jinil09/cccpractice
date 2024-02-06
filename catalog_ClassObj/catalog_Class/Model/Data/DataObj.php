<?php

class Model_Data_DataObj{
    protected $_row = [];
    public function __construct($row)
    {
        $this->_row = $row;
        // print_r($this->_row);
    }
    public function __call($name, $args)
    {
        $name = substr($name, 3);
        return isset($this->_row[$name])
            ? $this->_row[$name]
            : '';
    }
}