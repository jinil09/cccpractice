<?php

class Core_Model_Resource_Collection_Abstract{

    protected $_resource = null;
    protected $_modelClass = null;
    protected $_select = [];
    protected $_data = [];

    public function setResource($resource){
        $this->_resource = $resource;
        return $this;
    }
    public function setModelClass($modelClass){
        $this->_modelClass = $modelClass;
        return $this;
    }

    public function select(){
        $this->_select['FORM'] = $this->_resource->getTableName();
        return $this;
    }

    public function addFieldToFilter($field, $value)
    {
        $this->_select['WHERE'][$field][] = $value;
        return $this;
    }

    public function setOrderBy($orderBy) {
        $this->_select['ORDER BY'] = $orderBy;
        return $this;

    }

    public function setLimit($limit) {
        $this->_select['LIMIT'] = $limit;
        return $this;
    }


    public function load(){
        $sql =  "SELECT * FROM {$this->_select['FORM']}";

        if(isset($this->_select['WHERE'])){
            $whereCondition = [];
            foreach ($this->_select['WHERE'] as $column => $value) {
                foreach ($value as $_value) {
                    if(!is_array($_value)){
                        $_value = array('eq' => $_value);
                    }
                    foreach ($_value as $_condition => $_v) {
                        if (is_array($_v)) {
                            $_v = array_map(function ($v) {
                                return "'{$v}'";
                            }, $_v);
                            $_v = implode(',', $_v);
                        }
                        switch ($_condition) {
                            case 'eq':
                                $whereCondition[] = "{$column} = '{$_v}'";
                                break;
                            case 'in':
                                $whereCondition[] = "{$column} IN ({$_v})";
                                break;
                            case 'like':
                                $whereCondition[] = "{$column} LIKE '{$_v}'";
                                break;
                           
                        }
                    }
                }
            }
            $sql .= " WHERE " . implode(" AND ", $whereCondition);

        }
        if (isset($this->_select['ORDER BY'])) {
            $orderBy = $this->_select['ORDER BY'];
            $sql .= " ORDER BY {$orderBy}";
        }

        if (isset($this->_select['LIMIT'])) {
            $limit = $this->_select['LIMIT'];
            $sql .= " LIMIT {$limit}";
        }
        $result = $this->_resource->getAdapter()->fetchAll($sql);
        foreach ($result as $row) {
            $this->_data[] = Mage::getModel($this->_modelClass)->setData($row);
        }
    }

    public function getData(){
        $this->load();
        return $this->_data;
    }

    public function getFirstItem() {
        $this->load();
        return (isset($this->_data[0])) ? $this->_data[0] : null;
    }

    public function getLastItem() {
        $this->load();
        $size = sizeOf($this->_data);
        return (isset($this->_data[$size-1])) ? $this->_data[$size-1] : null;
    }
}
