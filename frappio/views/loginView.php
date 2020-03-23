<?php
namespace FRAMEWORKNS;

class loginView extends ViewAbstract{
    protected $model;
    protected $popular;
    public function __construct()
    {
        $this->createModel('loginModel');
    }
    public function render(){
        $this->setBody('login.tpl.php');
        $this->display($this->body);
    }
}

?>