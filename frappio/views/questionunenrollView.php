<?php
namespace FRAMEWORKNS;

class questionunenrollView extends ViewAbstract{
    protected $model;
    protected $questionunenroll;
    public function __construct()
    {
        $this->createModel('questionunenrollModel');
        $this->enrolled = $this->model->getEnrolled(Registry::get('email'));
    }
    public function render(){
        $this->setBody('questionunenroll.tpl.php');
        $this->display($this->body);
    }
}

?>