<?php
namespace FRAMEWORKNS;

class logoutController extends ControllerAbstract{
    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);
        Registry::get('errorhandler')->addPage('logout');
        Registry::set('email',null);
        Registry::set('role','guest');
        header('Location: ./index');
        $this->createModel('logoutModel');
    }

    public function start(){
    }
}


?>