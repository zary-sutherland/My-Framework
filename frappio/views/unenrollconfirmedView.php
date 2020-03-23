<?php
namespace FRAMEWORKNS;

class unenrollconfirmedView extends ViewAbstract{
    protected $model;
    protected $unenrollconfirmed;
    public function __construct()
    {
        $this->createModel('unenrollconfirmedModel');
    }
    public function render(){
        $this->setBody('unenrollconfirmed.tpl.php');
        $this->display($this->body);
    }
}

?>