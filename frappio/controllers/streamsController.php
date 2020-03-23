<?php
namespace FRAMEWORKNS;

class streamsController extends ControllerAbstract{

    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);
        //check if page can be viewed
        $this->viewingAllowed(strtolower($pageinfo[1]),'index');
        $this->createModel('streamsModel');
    }
    public function start(){
    }
}


?>