<?php

class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{


    protected $_allowedAction = [];

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $action = $this->getRequest()->getActionName();
        if (
            !in_array($action, $this->_allowedAction) &&
            !Mage::getSingleton('core/session')->get('logged_in_admin_id')
        ) {
            $this->getRequest()->redirect('admin/user/login');
        }
        return $this;
    }


}