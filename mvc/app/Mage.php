<?php

class Mage{

    private static $registry = [] ;
    private static $baseDir = 'C:/xampp/htdocs/Practice/mvc';

    public static function init(){

        // $uri = new Core_Model_Request();
        // $uriName = $uri->getRequestUri();
        $request = Mage::getModel('core/request');
        echo $request->getRequestUri();

    }

    public static function getSingleton($className){

    }

    public static function getModel($className){

        $className = str_replace("/", "_Model_", $className);
        $className = ucwords(str_replace("/", "_", $className), '_');
        return new $className();
    }

    public static function register($key, $value){

        self::$registry[$key]= $value;
    }

    public static function registry($key){

        return isset(self::$registry[$key]) ? self::$registry[key] : null;

    }

    public static function getBaseDir($subDir = null){

        if($subDir)
        {
            return self::$baseDir.'/'.$subDir;
        }
        return self::$baseDir;
    }
}