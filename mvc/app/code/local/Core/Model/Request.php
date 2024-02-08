<?php


class Core_Model_Request{

    
    protected $_moduleName;
    protected $_controllerName;
    protected $_actionName;

    public function __construct()
	{
		$uri = $this->getRequestUri();
		$uri = explode("/", $uri);
		$this->_moduleName = $uri[0];
		$this->_controllerName = $uri[1];
		$this->_actionName = $uri[2];
	}


    public function getParams($key= ''){
        return ($key == '')
                ? $_REQUEST
                : (isset($_REQUEST[$key])
                    ? $_REQUEST[$key]
                    : '');
    }

    public function getPostData($key= ''){
        return ($key == '')
                ? $_POST
                : (isset($_POST[$key])
                    ? $_POST[$key]
                    : '');
    }

    public function getQueryData($key= ''){
        return ($key == '')
                ? $_GET
                : (isset($_GET[$key])
                    ? $_GET[$key]
                    : ''
                );
    }

    public function isPost(){
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            return true;
        }
        return false;
    }

    public function getRequestUri(){
        $uri = $_SERVER['REQUEST_URI'];
        $uri = str_replace("/Practice/mvc/","",$uri);
        if(str_contains($uri, '?'))
        {
            $pos = strpos($uri, '?');
            $temp_uri = substr($uri,$pos);
            $uri = str_replace($temp_uri,"",$uri);
            echo $uri;
            return $uri;
        }
        return $uri;
    }

    public function getActionName(){
        return $this->_actionName;
    }
    public function getControllerName(){
        return $this->_controllerName;
    }
    public function getModuleName(){
        return $this->_moduleName;
    }


    public function getFullControllerClass(){
        $strClass = $this->_moduleName.'_Controller_'.$this->_controllerName;
        $strClass = ucwords($strClass,"_");
        return $strClass;
    }
}