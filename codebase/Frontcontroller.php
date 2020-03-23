<?php
namespace FRAMEWORKNS;


class Frontcontroller implements FrontControllerInterface{
    private $URI;
    private $controller;
    private $view;

    //get passed uri and save to frontcontroller then start init function
    public function __construct($uriroot)
	{
		$this->URI = $uriroot;
        $this->init();
    }
    
    //init the routing based on the passed uri and then create appropriate controller and view
    public function init(){
        $reg = Registry::getRegistrySingleton();
        $role = Registry::get('role');
        $routeInfo = new Router($this->URI, $role);
        $routeInfo = $routeInfo->get_routeInfo();


        $controller = $routeInfo['controller'];
        $action = $routeInfo['action'];
        $params = $routeInfo['params'];
        $view = $routeInfo['page'].'View';
        if(!empty($controller)){
            $this->controller = ControllerFactory::createController($controller);
            
            if($action != null){
                if($params != null){
                    $this->controller->$action($params);
                }
                else{
                $this->controller->$action();
                }
            }
            
        }

        if(empty($controller)){
            trigger_error('controller is necessary');
        }

        if(!empty($view)){
            $this->view = ViewFactory::createView($view);
            $this->view->render();
        }


    }
}



?>