<?php

class Core_Controller_Front{


    public function init(){

        $request = new Core_Model_Request();
        // $moduleName = $request->getModuleName();
        // $controllerName = $request->getControllerName();
        $actionName = $request->getActionName();
        $fullClassName = $request->getFullControllerClass();
        $indexAction = new $fullClassName();
        $action= $actionName.'Action';
        echo $indexAction->$action()."<br>";
        echo $fullClassName;

    }
}