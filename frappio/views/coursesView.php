<?php
namespace FRAMEWORKNS;

class coursesView extends ViewAbstract{
    protected $model;
    protected $courses;
    public function __construct()
    {
        $this->createModel('coursesModel');
        $this->courses = $this->model->getAllRecords();
    }
    public function render(){
        $this->setBody('courses.tpl.php');
        $this->display($this->body);
    }
}

?>