<?php
namespace FRAMEWORKNS;

class signupView extends ViewAbstract{
    protected $model;
    protected $popular;
    public function __construct()
    {
        $this->createModel('signupModel');
    }
    public function render(){
        $this->setBody('signup.tpl.php');
        $this->display($this->body);
    }
}

?>