<?php
namespace FRAMEWORKNS;

class indexController extends ControllerAbstract{

    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);

        //check if page can be viewed
        $this->viewingAllowed(strtolower($pageinfo[1]),'index');
        $this->createModel('indexModel');
    }
    public function start(){
    }
}


?>