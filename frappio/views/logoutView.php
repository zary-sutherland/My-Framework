<?php
namespace FRAMEWORKNS;

class logoutView extends ViewAbstract{
    protected $model;
    protected $popular;
    public function __construct()
    {
        $this->createModel('logoutModel');
    }
    public function render(){
    }
}

?>