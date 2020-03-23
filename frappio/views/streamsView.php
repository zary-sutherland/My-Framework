<?php
namespace FRAMEWORKNS;

class streamsView extends ViewAbstract{
    protected $model;
    protected $streams;
    public function __construct()
    {
        $this->createModel('streamsModel');
        $this->streams = $this->model->getAllRecords();
    }
    public function render(){
        $this->setBody('streams.tpl.php');
        $this->display($this->body);
    }
}

?>