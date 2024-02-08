<?php


class Core_Model_Request{

    public function __construct(){
        // echo "Jinil";
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
}