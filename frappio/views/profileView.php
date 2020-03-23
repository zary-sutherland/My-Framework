<?php
namespace FRAMEWORKNS;

class profileView extends ViewAbstract{
    protected $model;
    protected $profile;
    public function __construct()
    {
        $this->createModel('profileModel');
        $this->enrolled = $this->model->getEnrolled(Registry::get('email'));
    }
    public function render(){
        $this->setBody('profile.tpl.php');
        $this->display($this->body);
    }
}

?>