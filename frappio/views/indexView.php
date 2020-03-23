<?php
namespace FRAMEWORKNS;

class indexView extends ViewAbstract{
    protected $model;
    protected $popular;
    public function __construct()
    {
        $this->createModel('indexModel');
        $this->popular = $this->model->getPopular();
        $this->recommended = $this->model->getRecommended();
    }
    public function render(){
        $this->setBody('index.tpl.php');
        $this->display($this->body);
    }
}

?>