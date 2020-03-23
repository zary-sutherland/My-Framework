<?php
namespace FRAMEWORKNS;

abstract class ControllerAbstract{

    protected $model;

    //function to create appropriate model
    public function createModel($modelname){
        if(!isset($modelname)){
            trigger_error('must have a model name');
        }

        $this->model = ModelFactory::createModel($modelname);
    }

    abstract public function start();

    //function to check if user has the permissions to read the page and if not redirect to appropriate page
    public function viewingAllowed($page, $redirectionPage){
        $auth = new Auth();
        $result = $auth->isActionAllowable(PERMISSION_READ,$page,Registry::get('role'));
        if ($result == false){
            header('Location:'.URI_ROOT_PATH.$redirectionPage);
        }
    }
}


?>